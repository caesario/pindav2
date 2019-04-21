<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

//		$this->not_logged_in();

		$this->data['page_title'] = 'Artikel';


	}

    public function login()
    {
        $this->data['page_title'] = 'Login Admin Pinda';
        $this->render_login('login', $this->data);
    }




}