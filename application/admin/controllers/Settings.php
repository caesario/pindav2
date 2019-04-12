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
	    $id = 'aboutpinda001';
        $this->data['page_title'] = 'Tentang';
        $this->data['tentang'] = $this->setting->getAboutData($id);
        $this->render_template('webmin/tentang', $this->data);

    }

    public function editabout(){

        $this->form_validation->set_rules('tentang_atas', 'Tentang Atas', 'trim');
        $this->form_validation->set_rules('tentang_bawah', 'Status', 'trim');

        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');


        $id = $this->input->post('id_tentang');

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'tentang_atas' => $this->input->post('tentang_atas'),
                'tentang_bawah' => $this->input->post('tentang_bawah'),
                'UpdateTime' => date('Y-m-d H:i:s')
            );

            $update = $this->setting->updateabout($data, $id);
            if($update == true ){
                $this->session->set_flashdata('success', 'data berhasil di update');
                redirect('Settings/about', 'refresh');
            } else {
                $this->session->set_flashdata('error', 'data gagal diedut');
                redirect('Settings/about', 'refresh');
            }
        }
    }


}