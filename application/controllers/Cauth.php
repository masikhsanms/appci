<?php

class Cauth extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function login()
	{
		$this->load->model('mauth');
		$this->load->library('form_validation');

		$username = $this->input->post('email');
		$password = $this->input->post('password');
        // print_r($this->input->post());

		if($this->mauth->login($username, $password)){
			redirect(site_url('admin'));

		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
            
        }

		$this->load->view('login_form');
	}

	public function logout()
	{
		$this->load->model('mauth');
		$this->mauth->logout();
		redirect(site_url('cauth/login'));
	}
}