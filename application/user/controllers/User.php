<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

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

	public function dashboard ()
    {
        $this->data['page_title'] = 'Dashboard Profile';
        $this->render_template('User/dashboard', $this->data);
    }

    public function Myproject()
    {
        $this->data['page_title'] = 'Proyek Saya';
        $this->render_template('User/myproject', $this->data);
    }

    public function Karyasaya()
    {
        $this->data['page_title'] = 'Karya Saya';
        $this->render_template('User/karyasaya', $this->data);
    }

    public function Mycontribution()
    {
        $this->data['page_title'] = 'Kontribusi Saya';
        $this->render_template('User/Mycontribution', $this->data);
    }

    public function Editprofile()
    {
        $this->data['page_title'] = 'Ubah Profile Saya';
        $this->render_template('User/Editprofile', $this->data);
    }

    public function Editpassword()
    {
        $this->data['page_title'] = 'Ubah Password Saya';
        $this->render_template('User/Editpassword', $this->data);
    }

    public function fotosaya()
    {
        $this->data['page_title'] = 'Foto Saya';
        $this->render_template('User/Myfoto', $this->data);
    }

    public function mywallet()
    {
        $this->data['page_title'] = 'Dompet Saya';
        $this->render_template('User/Mywallet', $this->data);

    }

    public function topup() {

        $this->data['page_title'] = 'Top Up';
        $this->render_template('Dompet/topup', $this->data);
    }

    public function topupdetail() {

        $this->data['page_title'] = 'Top up - Detail';
        $this->render_template('Dompet/topupdetail', $this->data);
    }

    public function konfirmasitopup() {

        $this->data['page_title'] = 'Top up - Konfirmasi';
        $this->render_template('Dompet/topupkonfirmasi', $this->data);
    }

    public function withdraw() {
        $this->data['page_title'] = 'Withdraw';
        $this->render_template('Dompet/withdraw', $this->data);
    }

    public function withdrawdetail() {
        $this->data['page_title'] = 'Withdraw - Detail';
        $this->render_template('Dompet/withdrawdetail', $this->data);
    }



}
