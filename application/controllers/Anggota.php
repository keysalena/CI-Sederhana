<?php

//use PgSql\Result;

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Anggota');
    }

    public function index()
    {
        $this->select();
    }
    public function select()
    {
        $data['judul'] = "Data Anggota Perpustakaan";
        $data['anggota'] = $this->M_Anggota->Tampil();
        $this->load->view('template/header', $data);
        $this->load->view('anggota/view_data', $data);
        $this->load->view('template/footer');
        // var_dump($query);
    }
    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->M_Anggota->delete($id);
        redirect('anggota');
    }
    public function update()
    {
        $id_anggota = $this->input->post('id_anggota');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $this->M_Anggota->edit($id_anggota, $nama, $alamat);
        redirect('anggota');
    }

    public function insert()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $this->M_Anggota->save($nama, $alamat);
        redirect('anggota');
    }
    
}
