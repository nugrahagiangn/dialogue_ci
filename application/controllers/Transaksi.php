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
        $data['transaksi'] = $this->Transaksi_model->get_all_transaksi(); // Ambil semua tanpa limit
        $this->load->view('transaksi/index', $data);
    }

    public function tambah()
    {
        $data['barang'] = $this->Transaksi_model->get_barang();
        $data['pembeli'] = $this->Transaksi_model->get_pembeli();
        $this->load->view('transaksi/tambah', $data);
    }

    public function simpan()
    {
        $data = [
            'barang_id' => $this->input->post('id_barang'),
            'pembeli_id' => $this->input->post('id_pembeli'),
            'jumlah' => $this->input->post('jumlah')
        ];
        $this->session->set_flashdata('success_message', 'Data Transaksi Berhasil Disimpan!');
        $this->Transaksi_model->insert_transaksi($data);
        redirect('transaksi');
    }

    public function edit($encoded_id)
    {
        $id = base64_decode(urldecode($encoded_id));
        $data['transaksi'] = $this->Transaksi_model->get_by_id($id);
        $data['barang'] = $this->Transaksi_model->get_barang();
        $data['pembeli'] = $this->Transaksi_model->get_pembeli();
        $this->load->view('transaksi/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'barang_id' => $this->input->post('id_barang'),
            'pembeli_id' => $this->input->post('id_pembeli'),
            'jumlah' => $this->input->post('jumlah')
        ];
        $this->Transaksi_model->update_transaksi($id, $data);
        redirect('transaksi');
    }

    public function hapus($id)
    {
        $this->Transaksi_model->delete_transaksi($id);
        redirect('transaksi');
    }
}
