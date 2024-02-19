<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cusers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("musers");
        $this->load->library('form_validation');
        $this->load->model('mauth');
		if(!$this->mauth->current_user()){
			redirect('cauth/login');
		}

    }

    public function index()
    {
        $data["users"] = $this->musers->getAll();
        $this->load->view("admin/users/list", $data);
    }

    public function add()
    {
        $users = $this->musers;
        $users->save();
        $this->load->view("admin/users/form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/users');
       
        $users = $this->musers;
        $users->update();

        $data["data"] = $users->getById($id);

        if (!$data["data"]) show_404();
        
        $this->load->view("admin/users/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->musers->delete($id)) {
            redirect(site_url('admin/cusers'));
        }
    }
}