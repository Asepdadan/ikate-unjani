<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

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
        $data['title'] = "Halaman Rumah";
       $this->load->view('vhome',$data);
        
	}
     public function login(){
       $username = $_POST['username'];
       $password = $_POST['password'];

       if($username == "admin" && $password == "admin"){
        echo "ok";
       }else{
        $this->session->set_flashdata('pesan', 'Anda tidak dapat login');
       }
    }
}
