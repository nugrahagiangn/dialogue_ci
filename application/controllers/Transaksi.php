<?php
class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
    }

    public function index()
    {
        $data['barang'] = $this->Barang_model->get_all_barang();
        $data['transaksi'] = $this->Transaksi_model->get_all_transaksi(); // Ambil semua tanpa limit
        $this->load->view('transaksi/index', $data);
    }

    public function tambah()
    {
        $data['transaksi'] = $this->Transaksi_model->get_all_transaksi(); // Ambil semua tanpa limit
        $data['barang'] = $this->Transaksi_model->get_barang();
        $data['pembeli'] = $this->Transaksi_model->get_pembeli();
        $data['page'] = 'tambah';
        $this->load->view('transaksi/tambah', $data);
    }


    public function simpan()
    {
        $pembeli_id  = $this->input->post('pembeli_id');
        $tanggal     = $this->input->post('tanggal');
        $keterangan  = $this->input->post('keterangan');
        $barang_ids  = $this->input->post('barang_ids');
        $jumlahs     = $this->input->post('jumlahs');
        $hargas      = $this->input->post('hargas');
        $persens = $this->input->post('persens');
        $rps = $this->input->post('rps');

        // Validasi dasar
        $errors = [];

        if (!$pembeli_id) {
            $errors[] = "Pembeli harus dipilih.";
        }

        if (!$tanggal) {
            $errors[] = "Tanggal transaksi harus diisi.";
        }

        if (empty($barang_ids) || !is_array($barang_ids)) {
            $errors[] = "Minimal satu barang harus dipilih.";
        } else {
            foreach ($barang_ids as $i => $barang_id) {
                if (empty($barang_id)) {
                    $errors[] = "Barang ke-" . ($i + 1) . " tidak boleh kosong.";
                }
                if (empty($jumlahs[$i]) || $jumlahs[$i] < 1) {
                    $errors[] = "Jumlah barang ke-" . ($i + 1) . " harus minimal 1.";
                }
                if (empty($hargas[$i]) || $hargas[$i] < 1) {
                    $errors[] = "Harga barang ke-" . ($i + 1) . " tidak valid.";
                }
                if (isset($jumlahs[$i], $hargas[$i], $persens[$i], $rps[$i])) {
                    $jumlah = (int) $jumlahs[$i];
                    $harga = (float) $hargas[$i];
                    $persen = (float) $persens[$i];
                    $rp = (float) $rps[$i];

                    $total = $jumlah * $harga;
                    $diskon_persen = ($persen / 100) * $total;
                    $total_akhir = $total - $diskon_persen - $rp;

                    if ($total_akhir < 0) {
                        $errors[] = "Diskon barang ke-" . ($i + 1) . " terlalu besar.";
                    }
                }
            }
        }

        if (!empty($errors)) {
            $this->session->set_flashdata('error_message', $errors);

            // Data untuk repopulasi form
            $data['pembeli'] = $this->Pembeli_model->get_pembeli();
            $data['barang'] = $this->Barang_model->get_all_barang();
            $data['old'] = [
                'pembeli_id' => $pembeli_id,
                'tanggal' => $tanggal,
                'keterangan' => $keterangan,
                'barang_ids' => $barang_ids,
                'jumlahs' => $jumlahs,
                'hargas' => $hargas,
                'persens'    => $persens,
                'rps'        => $rps
            ];
            $data['page'] = 'tambah';

            $this->load->view('transaksi/tambah', $data);
            return;
        }

        // Simpan ke database
        $transaksiData = [
            'pembeli_id' => $pembeli_id,
            'tanggal'    => $tanggal,
            'keterangan' => $keterangan,
            'barang_ids' => $barang_ids,
            'jumlahs'    => $jumlahs,
            'hargas'     => $hargas,
            'persens'    => $persens,
            'rps'        => $rps
        ];

        $this->Transaksi_model->simpan_transaksi($transaksiData);

        $this->session->set_flashdata('success_message', 'Transaksi berhasil disimpan.');
        redirect('transaksi');
    }


    public function edit($encoded_id)
    {
        $id = base64_decode(urldecode($encoded_id));
        $this->load->model('Transaksi_model');
        $this->load->model('Pembeli_model');
        $this->load->model('Barang_model');

        $transaksi = $this->Transaksi_model->get_by_id($id);
        $detail    = $this->Transaksi_model->get_detail_by_transaksi($id);

        if (!$transaksi) {
            show_404();
        }

        $data = [
            'transaksi' => $transaksi,
            'detail'    => $detail,
            'pembeli'   => $this->Pembeli_model->get_pembeli(),
            'barang'    => $this->Barang_model->get_all_barang()
        ];
        $data['page'] = 'edit';

        $this->load->view('transaksi/edit', $data);
    }

    public function detail($encoded_id)
    {
        $id = base64_decode(urldecode($encoded_id));

        $transaksi = $this->Transaksi_model->get_by_id($id);
        $detail    = $this->Transaksi_model->get_detail_by_transaksi($transaksi->id_transaksi);


        if (!$transaksi) {
            show_404();
        }

        // Ambil data pembeli
        $pembeli = $this->Pembeli_model->get_by_id($transaksi->pembeli_id);

        // Ambil data barang dari transaksi detail berdasarkan barang_id
        foreach ($detail as $item) {
            $barang = $this->Barang_model->get_by_id($item->barang_id);
            $item->barang = $barang;
        }

        $data = [
            'transaksi' => $transaksi,
            'detail'    => $detail,
            'pembeli'   => $pembeli
        ];
        $data['page'] = 'tambah';

        $this->load->view('transaksi/detail', $data);
    }



    public function update($id)
    {
        $this->Transaksi_model->update_transaksi($this->input->post());
        $this->session->set_flashdata('success_message', 'Transaksi berhasil diperbarui.');
        redirect('transaksi');
    }

    public function hapus($id)
    {
        $transaksi_id = $this->Transaksi_model->get_transaksi_id($id);

        $this->Transaksi_model->delete_transaksi($transaksi_id);
        $this->session->set_flashdata('success_message', 'Transaksi berhasil dihapus.');
        redirect('transaksi');
    }
}
