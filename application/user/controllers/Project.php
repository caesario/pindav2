<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {

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
		$this->load->view('Proyek/Buatproyek');
	}

	public function init() {


        $this->data['page_title'] = 'Buat Proyek';
        $this->render_template('Proyek/initproyek', $this->data);

    }

    public function category() {
        $this->data['category'] = $this->category->getCategoryDataAll();
        $this->data['page_title'] = 'Pilih Kategori';
        $this->render_template('Proyek/selectcategory', $this->data);

    }

    public function info() {

        $this->data['page_title'] = 'Informasi Umum';
        $this->render_template('Proyek/infoumum', $this->data);

    }

    public function infotim() {

        $this->data['page_title'] = 'Informasi Tim';
        $this->render_template('Proyek/infotim', $this->data);
    }

    public function pembayaran() {

        $this->data['page_title'] = 'Pembayaran';
        $this->render_template('Proyek/infopemb', $this->data);
    }


    public function detail()
    {
        $this->data['page_title'] = 'Detail Proyek';
        $this->render_template('Proyek/detail', $this->data);
    }
}
