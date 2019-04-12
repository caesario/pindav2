<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

//		$this->not_logged_in();


	}

	public function about() {
        $this->data['page_title'] = 'Tentang';
        $this->render_template('webmin/tentang', $this->data);

    }


}