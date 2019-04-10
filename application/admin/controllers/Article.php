<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

//		$this->not_logged_in();

		$this->data['page_title'] = 'Artikel';


	}

	/* 
	* It only redirects to the manage category page
	*/
	public function index()
	{
        $this->data['artikel'] = $this->artikel->getAllArtikel();
		$this->render_template('artikel/index', $this->data);
	}



}