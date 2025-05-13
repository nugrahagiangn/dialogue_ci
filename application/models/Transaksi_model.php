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
        return $this->db->get()->result();
    }


    public function insert_transaksi($data)
    {
        return $this->db->insert('transaksi', $data);
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


    public function update_transaksi($data)
    {
        $id = $data['id_transaksi'];
        $total_bayar = 0;

        $this->db->where('id_transaksi', $id)->update('transaksi', [
            'pembeli_id'  => $data['pembeli_id'],
            'tanggal'     => $data['tanggal'],
            'keterangan'  => $data['keterangan']
        ]);

        $this->db->delete('detail_transaksi', ['transaksi_id' => $id]);

        $items = [];
        foreach ($data['barang_ids'] as $i => $barang_id) {
            $jumlah = (int) $data['jumlahs'][$i];
            $harga  = (int) $data['hargas'][$i];
            $rp  = (int) $data['rps'][$i];
            $persen  = (int) $data['persens'][$i];
            $total  = $jumlah * $harga;
            $total_bayar += $total;

            $items[] = [
                'transaksi_id' => $id,
                'barang_id'    => $barang_id,
                'jumlah'       => $jumlah,
                'total'        => $total,
                'disc_rp'        => $rp,
                'disc_persen'        => $persen
            ];
        }

        $this->db->insert_batch('detail_transaksi', $items);
        $this->db->where('id_transaksi', $id)->update('transaksi', ['total_bayar' => $total_bayar]);
    }

    public function delete_transaksi($id)
    {
        $this->db->delete('detail_transaksi', ['transaksi_id' => $id]);
        $this->db->delete('transaksi', ['id_transaksi' => $id]);
    }
}
