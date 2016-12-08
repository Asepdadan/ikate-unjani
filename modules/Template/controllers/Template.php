<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

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
       $this->load->view('vwelcome');
	}

    public function header(){
        $this->load->view('navbar');
    }
}
