<?php

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render_template($page = null, $data = array())
    {

        $this->load->view('layout/header',$data);
        $this->load->view('layout/sidebar',$data);
        $this->load->view('layout/topmenu',$data);
        $this->load->view($page, $data);
    }

}