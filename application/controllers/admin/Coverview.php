<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coverview extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('mauth');
		if(!$this->mauth->current_user()){
			redirect('cauth/login');
		}
    }

    public function index()
    {
        $this->load->view('admin/v_overview');
    }

}