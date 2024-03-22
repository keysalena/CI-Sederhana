<?php
class Model_sekolah extends CI_Model
{
    public function tambah_siswa($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tambah_ortu($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tambah_jurusan($data, $table)
    {
        $this->db->insert($table, $data);
    }
}