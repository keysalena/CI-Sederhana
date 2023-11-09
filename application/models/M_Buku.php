<?php
class M_Buku extends CI_Model
{
    public function Tampil()
    {
        $query = $this->db->get('buku');
        $data = $query->result_array();
        return $data;
    }
    public function save($judul, $jumlah, $penerbit, $pengarang)
    {
        $data = array(
            'judul' => $judul,
            'penerbit' => $penerbit,
            'pengarang' => $pengarang,
            'jumlah' => $jumlah
        );
        $this->db->insert('buku', $data);
    }
    public function pilih($id)
    {
        $query = $this->db->get_where('buku', array('id_buku' => $id));
        return $query;
    }
    public function edit($id, $judul, $jumlah, $penerbit, $pengarang)
    {
        $data = array(
            'judul' => $judul,
            'penerbit' => $penerbit,
            'pengarang' => $pengarang,
            'jumlah' => $jumlah,
        );
        $this->db->where('id_buku', $id);
        $this->db->update('buku', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
    }
}
