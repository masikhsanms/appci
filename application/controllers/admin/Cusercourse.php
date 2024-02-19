<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cusercourse extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("musercourse");
        $this->load->library('form_validation');
        $this->load->model('mauth');
		if(!$this->mauth->current_user()){
			redirect('cauth/login');
		}

    }

    public function index()
    {
        $data["data"] = $this->musercourse->getAllJoin();
        $this->load->view("admin/usercourse/list", $data);
    }

    public function add()
    {
        $modelload = $this->musercourse;
        $modelload->save();

        $data =  [
            'dusers' => $this->musercourse->getAllUsers(),
            'dcourses' => $this->musercourse->getAllCourses(),
        ];
        $this->load->view("admin/usercourse/form",$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/usercourse');
       
        $modelload = $this->musercourse;

        if ($modelload->update()) {
            redirect(site_url('admin/cusercourse'));
        }

        $data =  [
            'data' => $modelload->getById($id),
            'dusers' => $this->musercourse->getAllUsers(),
            'dcourses' => $this->musercourse->getAllCourses(),
        ];

        if (!$data["data"]) show_404();
        
        $this->load->view("admin/usercourse/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->musercourse->delete($id)) {
            redirect(site_url('admin/cusercourse'));
        }
    }
}   