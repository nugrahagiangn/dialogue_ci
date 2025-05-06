<?php
class Transaksi_model extends CI_Model
{

    public function get_all_transaksi()
    {
        $this->db->select('transaksi.*, barang.nama as nama_barang, pembeli.nama as nama_pembeli');
        $this->db->from('transaksi');
        $this->db->join('barang', 'transaksi.barang_id = barang.id');
        $this->db->join('pembeli', 'transaksi.pembeli_id = pembeli.id');
        $this->db->order_by('transaksi.created_at', 'DESC');
        return $this->db->get()->result();
    }

    public function insert_transaksi($data)
    {
        return $this->db->insert('transaksi', $data);
    }

    public function get_barang()
    {
        return $this->db->where('status', TRUE)->get('barang')->result();
    }

    public function get_pembeli()
    {
        return $this->db->get('pembeli')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('transaksi', ['id' => $id])->row();
    }

    public function update_transaksi($id, $data)
    {
        return $this->db->update('transaksi', $data, ['id' => $id]);
    }

    public function delete_transaksi($id)
    {
        return $this->db->delete('transaksi', ['id' => $id]);
    }
}
