<?php
class M_Anggota extends CI_Model
{
    public function Tampil()
    {
        $query = $this->db->get('anggota');
        $data = $query->result_array();
        return $data;
    }
    public function save($nama, $alamat)
    {
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat
        );
        $this->db->insert('anggota', $data);
    }
    public function pilih($id)
    {
        $query = $this->db->get_where('anggota', array('id_anggota' => $id));
        return $query;
    }
    public function edit($id,$nama,$alamat)
    {
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
        );
        $this->db->where('id_anggota', $id);
        $this->db->update('anggota', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_anggota', $id);
        $this->db->delete('anggota');
    }
}
