<?php
class Pembeli extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembeli_model');
    }

    public function index()
    {
        $data['pembeli'] = $this->Pembeli_model->get_pembeli();
        $this->load->view('pembeli/index', $data);
    }

    public function tambah()
    {
        $data['pembeli'] = $this->Pembeli_model->get_pembeli();
        $this->load->view('pembeli/tambah', $data);
    }

    public function simpan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->db->insert('pembeli', $data);

        $this->session->set_flashdata('success_message', 'Data Pembeli Berhasil Disimpan!');
        $redirect_to = $this->input->post('redirect_to');
        redirect($redirect_to ?? 'pembeli');
    }



    public function edit($encoded_id)
    {
        $id = base64_decode(urldecode($encoded_id));
        $data['pembeli'] = $this->Pembeli_model->get_by_id($id);
        $this->load->view('pembeli/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->Pembeli_model->update_pembeli($id, $data);
        redirect('pembeli');
    }

    public function hapus($id)
    {
        $this->Pembeli_model->delete_pembeli($id);
        redirect('pembeli');
    }
}
