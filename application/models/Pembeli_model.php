<?php
class Pembeli_model extends CI_Model
{
    public function get_pembeli()
    {
        return $this->db
            ->select("pembeli.*, 
            CASE 
                WHEN status = 't' THEN 'Aktif' 
                ELSE 'Tidak Aktif' 
            END AS status_keterangan")
            ->from('pembeli')
            ->get()
            ->result();
    }

    public function insert_pembeli($data)
    {
        return $this->db->insert('pembeli', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('pembeli', ['id' => $id])->row();
    }

    public function update_pembeli($id, $data)
    {
        return $this->db->update('pembeli', $data, ['id' => $id]);
    }

    public function update_status($id, $data)
    {
        return $this->db->where('id', $id)->update('pembeli', ['status' => $data['status'], 'updated_at' => $data['updated_at']]);
    }

    public function delete_pembeli($id)
    {
        return $this->db->delete('pembeli', ['id' => $id]);
    }
}
