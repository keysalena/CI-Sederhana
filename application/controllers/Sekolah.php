<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
    }
    public function selesai()
    {
        $this->load->view('step_selesai');
    }

    public function tambah()
    {
        $this->load->model('Model_sekolah');

        $nisn = $this->input->post('nisn');
        $nama_siswa = $this->input->post('nama_siswa');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $agama = $this->input->post('agama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $asal_sekolah = $this->input->post('asal_sekolah');
        $no_hp_siswa = $this->input->post('no_hp_siswa');
        
        $nama_ayah = $this->input->post('nama_ayah');
        $alamat_ayah = $this->input->post('alamat_ayah');
        $no_hp_ayah = $this->input->post('no_hp_ayah');
        $pekerjaanayah = $this->input->post('pekerjaanayah');
        $pekerjaanayah_lainnya = $this->input->post('pekerjaanayah_lainnya');
        
        $nama_ibu = $this->input->post('nama_ibu');
        $alamat_ibu = $this->input->post('alamat_ibu');
        $no_hp_ibu = $this->input->post('no_hp_ibu');
        $pekerjaanibu = $this->input->post('pekerjaanibu');
        $pekerjaanibu_lainnya = $this->input->post('pekerjaanibu_lainnya');
        
        $jurusan1 = $this->input->post('jurusan1');
        $jurusan2 = $this->input->post('jurusan2');
        $jurusan3 = $this->input->post('jurusan3');
        
        
        $siswa = array(
            'nisn' => $nisn,
            'nama_siswa' => $nama_siswa,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'agama' => $agama,
            'jenis_kelamin' => $jenis_kelamin,
            'asal_sekolah' => $asal_sekolah,
            'no_hp' => $no_hp_siswa
        );

        $this->Model_sekolah->tambah_siswa($siswa, 'tb_siswa');
        $id_siswa = $this->db->insert_id();

        $data_jurusan = array(
            'id_siswa' => $id_siswa,
            'jurusan1' => $jurusan1,
            'jurusan2' => $jurusan2,
            'jurusan3' => $jurusan3
        );

        $pekerjaan_ayah = ($pekerjaanayah == "Lainnya") ? $pekerjaanayah_lainnya : $pekerjaanayah;
        $pekerjaan_ibu = ($pekerjaanibu == "Lainnya") ? $pekerjaanibu_lainnya : $pekerjaanibu;

        $orangtua = array(
            'id_siswa' => $id_siswa,
            'nama_ayah' => $nama_ayah,
            'alamat_ayah' => $alamat_ayah,
            'no_hp_ayah' => $no_hp_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'nama_ibu' => $nama_ibu,
            'alamat_ibu' => $alamat_ibu,
            'no_hp_ibu' => $no_hp_ibu,
            'pekerjaan_ibu' => $pekerjaan_ibu,
        );


        $this->Model_sekolah->tambah_jurusan($data_jurusan, 'tb_jurusan');
        $this->Model_sekolah->tambah_ortu($orangtua, 'tb_orang_tua');
        redirect('sekolah/selesai');
    }
}
