<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends MX_Controller {

	public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
            $this->murl = '/modules/'.$this->uri->segment(1).'/';
            $this->load->library('session');
            //echo Modules::run('Authorization/cek_hak_akses');//cek hak akses
    }

	public function index()
	{
        $data['title'] = "Halaman Cari Alumni";
       $this->load->view('vdaftar_forum',$data);
        
	}

    public function simpan(){
        $username = $this->input->post('username');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $tlp = $this->input->post('tlp');
        $alamat = $this->input->post('alamat');
        $alamatkantor = $this->input->post('alamatkantor');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $foto = $this->input->post('foto');
        $password = $this->input->post('password');

         $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nim', 'No Induk Mahasiswa', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = "Halaman Cari Alumni";
            $this->load->view('vdaftar_forum',$data);
            //redirect('daftar');
        }
        else
        {
                print_r($_POST);
        }



    }
}

