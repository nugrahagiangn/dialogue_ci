<?php
class Transaksi_model extends CI_Model
{
    public function get_all_transaksi()
    {
        $this->db->select('t.*, p.nama AS nama_pembeli, dt.barang_dibeli, TO_CHAR(t.tanggal , \'DD FMMonth YYYY - HH24:MI:SS\') AS tgl, TO_CHAR(t.tanggal , \'YYYY-MM-DD\') AS tgl_iso  ');
        $this->db->from('transaksi t');
        $this->db->join('pembeli p', 't.pembeli_id = p.id');

        // Subquery untuk string_agg barang dan jumlah
        $this->db->join("(SELECT 
                        transaksi_id, 
                        string_agg(barang.nama || ' (' || jumlah || ' x ' || 
                        (total / NULLIF(jumlah, 0)) || ')', ', ') AS barang_dibeli
                     FROM detail_transaksi
                     JOIN barang ON barang.id = detail_transaksi.barang_id
                     GROUP BY transaksi_id) dt", 'dt.transaksi_id = t.id_transaksi');
        $this->db->order_by('t.tanggal', 'DESC');
        return $this->db->get()->result();
    }

    public function count_filtered_transaksi($min, $max)
    {
        if ($min && $max) {
            $this->db->where('tanggal >=', $min);
            $this->db->where('tanggal <=', $max);
        }
        return $this->db->count_all_results('transaksi');
    }

    public function get_filtered_transaksi($min = null, $max = null, $limit = null, $offset = null)
    {
        $this->db->select('
        t.*, 
        p.nama AS nama_pembeli, 
        dt.barang_dibeli, 
        dt.total_diskon, 
        dt.total_setelah_diskon,
        TO_CHAR(t.tanggal, \'DD FMMonth YYYY - HH24:MI:SS\') AS tgl, 
        TO_CHAR(t.tanggal, \'YYYY-MM-DD\') AS tgl_iso
    ');
        $this->db->from('transaksi t');
        $this->db->join('pembeli p', 't.pembeli_id = p.id');

        // Subquery gabungan per transaksi
        $this->db->join("(
        SELECT 
            dt.transaksi_id,
            string_agg(
            b.nama || ' (' || dt.jumlah || ' x ' || 
            b.harga || ')', 
            ', '
            ) AS barang_dibeli,
            SUM(
                COALESCE(dt.disc_rp, 0) + 
                (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
            ) AS total_diskon,
            SUM(
                dt.total - (
                    COALESCE(dt.disc_rp, 0) + 
                    (COALESCE(dt.disc_persen, 0) / 100.0 * dt.total)
                )
            ) AS total_setelah_diskon
        FROM detail_transaksi dt
        JOIN barang b ON b.id = dt.barang_id
        GROUP BY dt.transaksi_id
    ) dt", 'dt.transaksi_id = t.id_transaksi');

        // Filter tanggal (jika ada)
        if (!empty($min) && !empty($max)) {
            $this->db->where('DATE(t.tanggal) >=', $min);
            $this->db->where('DATE(t.tanggal) <=', $max);
        }

        // Urutan
        $this->db->order_by('t.tanggal', 'DESC');

        return $this->db->get()->result();
    }


    public function insert_transaksi($data)
    {
        return $this->db->insert('transaksi', $data);
    }

    public function get_transaksi_with_detail($min_date = null, $max_date = null)
    {
        $this->db->select('
        t.id_transaksi, t.tanggal, t.keterangan, t.total_bayar,
        p.nama as nama_pembeli,
        b.harga,
        b.nama as nama_barang, dt.jumlah, dt.total as subtotal,
        dt.disc_rp, dt.disc_persen
    ');
        $this->db->from('transaksi t');
        $this->db->join('pembeli p', 't.pembeli_id = p.id');
        $this->db->join('detail_transaksi dt', 'dt.transaksi_id = t.id_transaksi'); // <- penting
        $this->db->join('barang b', 'dt.barang_id = b.id');

        if ($min_date) {
            $this->db->where("t.tanggal >=", $min_date . ' 00:00:00');
        }
        if ($max_date) {
            $this->db->where("t.tanggal <=", $max_date . ' 23:59:59');
        }

        $this->db->order_by('t.tanggal', 'DESC');
        log_message('debug', $this->db->last_query());
        return $this->db->get()->result();
    }

    public function generate_id_transaksi()
    {
        $prefix = 'OP-' . date('ym');
        $last_number = 0;

        do {
            $next_number = str_pad($last_number + 1, 4, '0', STR_PAD_LEFT);
            $new_id = $prefix . '-' . $next_number;

            $exists = $this->db->get_where('transaksi', ['id_transaksi' => $new_id])->num_rows() > 0;
            $last_number++;
        } while ($exists);

        return $new_id;
    }

    public function simpan_transaksi($data)
    {
        $barang_ids = $data['barang_ids'];
        $jumlahs    = $data['jumlahs'];
        $hargas     = $data['hargas'];
        $persens     = $data['persens'];
        $rps     = $data['rps'];

        $transaksi_id = $this->generate_id_transaksi();

        $total_bayar = 0;
        $items = [];

        foreach ($barang_ids as $index => $barang_id) {
            $jumlah = (int) ($jumlahs[$index] ?? 1);
            $harga  = (int) ($hargas[$index] ?? 0);
            $persen  = (int) ($persens[$index] ?? 0);
            $rp  = (int) ($rps[$index] ?? 0);
            $total  = $jumlah * $harga;

            $total_bayar += $total;

            $items[] = [
                'transaksi_id' => $transaksi_id,
                'barang_id'    => $barang_id,
                'jumlah'       => $jumlah,
                'total'        => $total,
                'disc_rp'        => $rp,
                'disc_persen'        => $persen,
            ];
        }

        // Insert transaksi
        $this->db->insert('transaksi', [
            'id_transaksi' => $transaksi_id,
            'pembeli_id'   => $data['pembeli_id'],
            'tanggal'      => $data['tanggal'],
            'keterangan'   => $data['keterangan'],
            'total_bayar'  => $total_bayar
        ]);

        // Insert detail
        $this->db->insert_batch('detail_transaksi', $items);
    }

    public function get_barang()
    {
        return $this->db->where('status', TRUE)->get('barang')->result();
    }

    public function get_pembeli()
    {
        return $this->db->get('pembeli')->result();
    }

    public function get_transaksi_id($id)
    {
        $hasil = $this->db->get_where('transaksi', ['id_transaksi' => $id])->row();
        $id_transaksi = $hasil->id_transaksi;
        return $id_transaksi;
    }

    public function get_by_id($id)
    {
        $this->db->select("*, TO_CHAR(tanggal, 'DD FMMonth YYYY') AS tgl");
        $this->db->from('transaksi');
        $this->db->where('id_transaksi', $id);
        return $this->db->get()->row();
    }

    public function get_detail_by_id($id)
    {
        return $this->db->get_where('detail_transaksi', ['transaksi_id' => $id])->result();
    }

    public function get_detail_by_transaksi($id_transaksi)
    {
        return $this->db->where('transaksi_id', $id_transaksi)
            ->get('detail_transaksi')
            ->result();
    }

    public function update_transaksi($data, &$errors = [])
    {
        $id = $data['id_transaksi'];
        $total_bayar = 0;

        $barang_ids = $data['barang_ids'];
        $jumlahs    = $data['jumlahs'];
        $hargas     = $data['hargas'];
        $persens    = $data['persens'];
        $rps        = $data['rps'];

        // Validasi barang
        foreach ($barang_ids as $i => $barang_id) {
            $jumlah = (int) $jumlahs[$i];
            $harga  = (float) $hargas[$i];
            $persen = (float) $persens[$i];
            $rp     = (float) $rps[$i];

            $total_awal = $jumlah * $harga;
            $diskon_persen = ($persen / 100) * $total_awal;
            $total_diskon = $diskon_persen + $rp;
            $total_setelah_diskon = $total_awal - $total_diskon;

            if ($total_setelah_diskon < 0) {
                $errors[] = "Diskon barang ke-" . ($i + 1) . " terlalu besar.";
            }
        }

        if (!empty($errors)) {
            return false; // Gagal validasi
        }

        // Proses update jika valid
        $this->db->where('id_transaksi', $id)->update('transaksi', [
            'pembeli_id'  => $data['pembeli_id'],
            'tanggal'     => $data['tanggal'],
            'keterangan'  => $data['keterangan']
        ]);

        $this->db->delete('detail_transaksi', ['transaksi_id' => $id]);

        $items = [];
        foreach ($barang_ids as $i => $barang_id) {
            $jumlah = (int) $jumlahs[$i];
            $harga  = (float) $hargas[$i];
            $persen = (float) $persens[$i];
            $rp     = (float) $rps[$i];

            $total_awal = $jumlah * $harga;
            $diskon_persen = ($persen / 100) * $total_awal;
            $total_diskon = $diskon_persen + $rp;
            $total_setelah_diskon = $total_awal - $total_diskon;

            $total_bayar += $total_setelah_diskon;

            $items[] = [
                'transaksi_id' => $id,
                'barang_id'    => $barang_id,
                'jumlah'       => $jumlah,
                'total'        => $total_setelah_diskon,
                'disc_rp'      => $rp,
                'disc_persen'  => $persen
            ];
        }

        $this->db->insert_batch('detail_transaksi', $items);
        $this->db->where('id_transaksi', $id)->update('transaksi', ['total_bayar' => $total_bayar]);

        return true;
    }

    public function delete_transaksi($id)
    {
        $this->db->delete('detail_transaksi', ['transaksi_id' => $id]);
        $this->db->delete('transaksi', ['id_transaksi' => $id]);
    }
}
