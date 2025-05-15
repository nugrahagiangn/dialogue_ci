<?php
class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data['barang'] = $this->Barang_model->get_all_barang();
        $this->load->view('barang/index', $data);
    }


    public function tambah()
    {
        $data['barang'] = $this->Barang_model->get_all_barang();
        $this->load->view('barang/tambah', $data);
    }

    public function simpan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
        ];
        $this->db->insert('barang', $data);

        $this->session->set_flashdata('success_message', 'Data Barang Berhasil Disimpan!');
        $redirect_to = $this->input->post('redirect_to');
        redirect($redirect_to ?? 'barang');
    }

    public function edit($encoded_id)
    {
        $id = base64_decode(urldecode($encoded_id));
        $data['barang'] = $this->Barang_model->get_by_id($id);
        $this->load->view('barang/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama'   => $this->input->post('nama'),
            'harga'  => $this->input->post('harga'),
            'status' => $this->input->post('status'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->Barang_model->update_barang($id, $data);
        redirect('barang');
    }

    public function hapus($id)
    {
        $barang = $this->Barang_model->get_by_id($id);
        if ($barang) {
            $data['status'] = ($barang->status === "t") ? "f" : "t";
            $data['updated_at'] = date('Y-m-d H:i:s');
            $this->Barang_model->update_status($id, $data);
        }
        redirect('barang');
    }
}
