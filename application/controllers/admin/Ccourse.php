<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ccourse extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mcourse");
        $this->load->library('form_validation');
        $this->load->model('mauth');
		if(!$this->mauth->current_user()){
			redirect('cauth/login');
		}

    }

    public function index()
    {
        $data["data"] = $this->mcourse->getAll();
        $this->load->view("admin/courses/list", $data);
    }

    public function add()
    {
        $modelload = $this->mcourse;
        $modelload->save();
        $this->load->view("admin/courses/form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/courses');
       
        $modelload = $this->mcourse;
        $modelload->update();

        $data["data"] = $modelload->getById($id);

        if (!$data["data"]) show_404();
        
        $this->load->view("admin/courses/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->mcourse->delete($id)) {
            redirect(site_url('admin/ccourse'));
        }
    }
}   