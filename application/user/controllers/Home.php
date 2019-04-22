<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

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
    $totalide = $this->proyek->getTotalSubmitIde();
    $totallamar = $this->proyek->getTotalLamar();
    $totalsubmit = $this->proyek->getTotalSubmitDesain();

	    $total_submit = $totalide + $totallamar + $totalsubmit;

        $this->data['total_point'] = $this->user->getPointTotal();
	    $this->data['total_submisi'] = $total_submit;
	    $this->data['page_title'] = 'Home';
	    $this->data['total_user'] = $this->user->getUserTotal();
	    $this->data['total_proyek'] = $this->proyek->getProyekBerhasil();
	    $this->data['category'] = $this->category->getCategoryData();
		$this->load->view('Home', $this->data);
	}
}
