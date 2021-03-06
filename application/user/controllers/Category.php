<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
        parent::__construct();

//		$this->not_logged_in();
    }
	public function index()
    {
        $this->load->view('Home');
    }

    public function allcategory()
    {
        $this->data['category'] = $this->category->getCategoryData();
        $this->data['page_title'] = 'Daftar Kategori';
        $this->render_template('list/allcategory', $this->data);
    }

    public function login()
    {
        $this->data['page_title'] = 'Login';
        $this->load->view('auth/Login', $this->data);
    }
}