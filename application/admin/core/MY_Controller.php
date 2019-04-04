<?php

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render_template($page = null, $data = array())
    {

        $this->load->view('template/header',$data);
        $this->load->view('template/header_menu',$data);
        $this->load->view('template/sidebar_menu',$data);
        $this->load->view($page, $data);
    }

}