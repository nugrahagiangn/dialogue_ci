<?php
class Barang_model extends CI_Model
{

    public function get_all_barang()
    {
        return $this->db->order_by('created_at', 'DESC')->get('barang')->result();
    }

    public function get_barang($limit, $offset, $search = null)
    {
        if (!empty($search)) {
            $this->db->like('nama', $search);
        }
        return $this->db->get('barang', $limit, $offset)->result();
    }


    public function count_barang($search = null)
    {
        if (!empty($search)) {
            $this->db->like('nama', $search);
        }
        return $this->db->count_all_results('barang');
    }



    public function insert_barang($data)
    {
        return $this->db->insert('barang', $data);
    }


    public function get_by_id($id)
    {
        return $this->db->get_where('barang', ['id' => $id])->row();
    }


    public function update_barang($id, $data)
    {
        return $this->db->update('barang', $data, ['id' => $id]);
    }

    public function delete_barang($id)
    {
        return $this->db->delete('barang', ['id' => $id]);
    }
}
