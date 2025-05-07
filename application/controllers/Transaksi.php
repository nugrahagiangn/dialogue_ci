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
        $this->load->view('transaksi/tambah', $data);
    }

    public function simpan()
    {
        $pembeli_id  = $this->input->post('pembeli_id');
        $tanggal     = $this->input->post('tanggal');
        $keterangan  = $this->input->post('keterangan');

        $barang_ids  = $this->input->post('barang_id'); // array
        $jumlahs     = $this->input->post('jumlah');    // array
        $hargas      = $this->input->post('harga');     // array

        if (!empty($barang_ids) && is_array($barang_ids)) {

            $transaksiData = [
                'pembeli_id' => $pembeli_id,
                'tanggal'    => $tanggal,
                'keterangan' => $keterangan,
                'barang_ids' => $barang_ids,
                'jumlahs'    => $jumlahs,
                'hargas'     => $hargas
            ];

            $this->Transaksi_model->simpan_transaksi($transaksiData);

            $this->session->set_flashdata('success_message', 'Transaksi berhasil disimpan.');
        } else {
            $this->session->set_flashdata('error_message', 'Pilih minimal satu barang dan jumlah.');
        }

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

        $this->load->view('transaksi/edit', $data);
    }


    public function update($id)
    {
        $this->Transaksi_model->update_transaksi($this->input->post());
        $this->session->set_flashdata('success_message', 'Transaksi berhasil diperbarui.');
        redirect('transaksi');
    }

    public function hapus($id)
    {
        $this->Transaksi_model->delete_transaksi($id);
        $this->session->set_flashdata('success_message', 'Transaksi berhasil dihapus.');
        redirect('transaksi');
    }
}
