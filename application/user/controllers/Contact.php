<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

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
        $this->data['kontak'] = $this->webmin->getKontakData();
        $this->data['page_title'] = 'Contact';
        $this->render_template('webmin/kontak', $this->data);
    }

    public function kirim() {

        $id = uniqid('PSN-');
        $this->form_validation->set_rules('nama_anda', 'Nama', 'trim|required');
        $this->form_validation->set_rules('nomor_anda', 'Nomor telepon', 'trim|required');
        $this->form_validation->set_rules('email_anda', 'Email', 'trim|required');
        $this->form_validation->set_rules('saran_anda', 'Pesan', 'trim|required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'id_pesan' => $id,
                'nama_anda' => $this->input->post('nama_anda'),
                'nomor_anda' => $this->input->post('nomor_anda'),
                'email_anda' => $this->input->post('email_anda'),
                'pesan_anda' => $this->input->post('saran_anda'),
                'status' => 1,
                'CreateTime' =>  date('Y-m-d H:i:s')
            );

            $create = $this->webmin->createpesan($data);
            if($create == true) {
                $this->session->set_flashdata('success', 'Pesan Berhasil Ditambah');
                redirect('Contact', 'refresh');
            }
            else {
                $this->session->set_flashdata('error', 'Artikel gagal Ditambah');
                redirect('Contact', 'refresh');
            }
        }
        else {
            $this->data['kontak'] = $this->webmin->getKontakData();
            $this->data['page_title'] = 'Contact';
            $this->render_template('webmin/kontak', $this->data);
        }

    }

}