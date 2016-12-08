<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends MX_Controller {

	public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
            $this->murl = '/modules/'.$this->uri->segment(1).'/';
            $this->load->library('session');
    }
	
	public function index()
	{
            $data['murl'] = $this->murl;
            $this->load->view('vauthorization',$data);
	}

	public function check_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$encrypt = $this->encrypt->decode($password);
		
		$data = $this->db->query("select * from login where username = '$username' and password = '$encrypt' limit 1")->result();
		
		if($data){
			foreach ($data as $row) {
				# code...
				$this->session->set_userdata('username', $username);
				$this->session->set_userdata('email', $row->email);
				$this->session->set_userdata('hak_akses', $row->hak_akses);
			}
			redirect('cek_hak_akses');
		}else{
			$this->session->set_flashdata('pesan','Maaf cek kembali username dan password anda');
			redirect('login');
		}
	}

	public function cek_hak_akses(){
		if($this->session->userdata('hak_akses') == 1){
			echo "super admin";
		}elseif ($this->session->userdata('hak_akses') == 2) {
			# code...
			echo "admin forum";
		}elseif ($this->session->userdata('hak_akses') == 3) {
			# code...
			echo "admin e-commerce";
		}elseif ($this->session->userdata('hak_akses') == 4) {
			# code...
			echo "admin biro jodoh";
		}elseif ($this->session->userdata('hak_akses') == 5){
			echo "user alumni";
		}else{
			$this->session->set_flashdata('pesan','Maaf Silahkan Login Terlebih Dahulu');
			redirect('login');
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('pesan','Terima kasih');
		redirect('login');
	}

	public function push(){
		$pass = $this->encrypt->encode('12345678');
		$array = array(
			'username' => "asdan4",
			'password' => $pass,
			'email' => "dadanasep4@gmail.com",
			'hak_akses' => 4
			);

		$this->db->insert('login',$array);

		// echo $this->session->userdata('hak_akses');
		// echo $this->session->userdata('email');
	}



}
