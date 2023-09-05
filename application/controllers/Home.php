<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Home";
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/navbar');
        $this->load->view('admin/home');
        $this->load->view('admin/template/footer');
    }
}
