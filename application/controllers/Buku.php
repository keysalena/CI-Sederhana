<?php

//use PgSql\Result;

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Buku');
    }
    public function index()
    {
        $this->select();
    }
    public function select()
    {
        $data['judul'] = "Data Buku Perpustakaan";
        $data['buku'] = $this->M_Buku->Tampil();
        $this->load->view('template/header', $data);
        $this->load->view('buku/view_data', $data);
        $this->load->view('template/footer');
        // var_dump($query);
    }
    public function hapus()
    {
        $id = $this->uri->segment(3);
        $this->M_Buku->delete($id);
        redirect('buku');
    }
    public function update()
    {
        $id_buku = $this->input->post('id_buku');
        $judul = $this->input->post('judul');
        $penerbit = $this->input->post('penerbit');
        $pengarang = $this->input->post('pengarang');
        $jumlah = $this->input->post('jumlah');

        $this->M_Buku->edit($id_buku, $judul, $jumlah, $penerbit, $pengarang);
        redirect('buku');
    }

    public function insert()
    {
        $judul = $this->input->post('judul');
        $penerbit = $this->input->post('penerbit');
        $pengarang = $this->input->post('pengarang');
        $jumlah = $this->input->post('jumlah');
        $this->M_Buku->save($judul, $jumlah, $penerbit, $pengarang);
        redirect('buku');
    }
    
}
