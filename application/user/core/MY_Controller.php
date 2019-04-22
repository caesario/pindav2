<?php

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Model_webmin', 'webmin');
        $this->load->model('Model_user', 'user');
        $this->load->model('Model_proyek', 'proyek');
        $this->load->model('Model_category', 'category');
    }

    public function render_template($page = null, $data = array())
    {

        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu',$data);
        $this->load->view($page, $data);
        $this->load->view('layout/footer', $data);
    }


}