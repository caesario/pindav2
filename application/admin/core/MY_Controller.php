<?php

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('model_category', 'category');
        $this->load->model('model_artikel', 'artikel');
        $this->load->model('model_admin', 'admin');
        $this->load->model('model_pesan', 'pesan');
        $this->load->model('model_settings', 'setting');
        $this->load->model('model_user', 'user');
        $this->load->model('model_dompet', 'dompet');
        $this->load->model('model_project', 'proyek');
    }

    public function render_template($page = null, $data = array())
    {

        $this->load->view('layout/header',$data);
        $this->load->view('layout/sidebar',$data);
        $this->load->view('layout/topmenu',$data);
        $this->load->view($page, $data);
    }

    public function render_login($page = null, $data = array())
    {

        $this->load->view('layout/headerlogin',$data);
        $this->load->view($page, $data);
        $this->load->view('layout/footerlogin', $data);
    }

}