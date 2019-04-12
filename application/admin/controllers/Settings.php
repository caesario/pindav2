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

    public function testimoni(){

        $this->data['page_title'] = 'Testimoni';
        $this->render_template('webmin/testimoni', $this->data);
    }

    public function fetchTestimoniData()
    {
        $result = array('data' => array());

        $data = $this->setting->getTestimoniData();

        foreach ($data as $key => $value) {
            // button
            $buttons = '';


            $buttons .= '<button type="button" class="btn btn-warning" onclick="editTestimoni(&quot;'.$value['id_testimoni'].'&quot;)" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></button>';

            $buttons .= ' <button type="button" class="btn btn-danger" onclick="removeFunc(&quot;'.$value['id_testimoni'].'&quot;)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';


            $status = '';
            if($value['status'] == 1) {
                $status = '<span class="label label-warning">Tidak Tampil</span>';
            } else if($value['status'] == 2) {
                $status = '<span class="label label-success">Sudah Tampil</span>';
            } else {
                $status = '<span class="label label-danger">Tidak Diketahui</span>';
            }


            $result['data'][$key] = array(
                $value['id_testimoni'],
                $value['id_user'],
                $status,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }


    public function removetestimoni() {

        $id_testimoni = $this->input->post('id_testimoni');
        $response = array();
        if( $id_testimoni ) {
            $delete = $this->setting->removetesti($id_testimoni);

            if($delete == true) {
                $response['success'] = true;
                $response['messages'] = "Successfully removed";
            }
            else {
                $response['success'] = false;
                $response['messages'] = "Error in the database while removing the brand information";
            }
        }
        else {
            $response['success'] = false;
            $response['messages'] = "Refersh the page again!!";
        }

        echo json_encode($response);

    }

    public function fetchTestimoniDataById($id)
    {
        if($id) {
            $data = $this->setting->getTestimoniData($id);
            echo json_encode($data);
        }

        return false;
    }

    public function updatetestimoni($id)
    {

        $response = array();

        if($id) {
            $this->form_validation->set_rules('status', 'Status', 'trim');

            $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'status' => $this->input->post('status')
                );

                $update = $this->setting->updatetesti($data, $id);
                if($update == true) {
                    $response['success'] = true;
                    $response['messages'] = 'Succesfully updated';
                }
                else {
                    $response['success'] = false;
                    $response['messages'] = 'Error in the database while updated the brand information';
                }
            }
            else {
                $response['success'] = false;
                foreach ($_POST as $key => $value) {
                    $response['messages'][$key] = form_error($key);
                }
            }
        }
        else {
            $response['success'] = false;
            $response['messages'] = 'Error please refresh the page again!!';
        }

        echo json_encode($response);
    }

    // End Testimoni


    // Start FAQ

    public function faq(){

        $this->data['page_title'] = 'FAQ';
        $this->render_template('webmin/faq', $this->data);
    }

    public function fetchfaqData()
    {
        $result = array('data' => array());

        $data = $this->setting->getfaqData();

        foreach ($data as $key => $value) {
            // button
            $buttons = '';


            $link_address = site_url('Settings/editfaq/'.$value['id_faq']);
            $buttons .= '<a href="'.$link_address.'"class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>';

            $buttons .= ' <button type="button" class="btn btn-danger" onclick="removefaq(&quot;'.$value['id_faq'].'&quot;)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';



            $result['data'][$key] = array(
                $value['id_faq'],
                $value['judul_tanya'],
                $value['jawaban_tanya'],
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }


    public function removefaq() {

        $id_faq = $this->input->post('id_faq');
        $response = array();
        if( $id_faq ) {
            $delete = $this->setting->removefaq($id_faq);

            if($delete == true) {
                $response['success'] = true;
                $response['messages'] = "Successfully removed";
            }
            else {
                $response['success'] = false;
                $response['messages'] = "Error in the database while removing the brand information";
            }
        }
        else {
            $response['success'] = false;
            $response['messages'] = "Refersh the page again!!";
        }

        echo json_encode($response);

    }

    public function addfaq() {

        $id = uniqid('FAQ-');
        $this->form_validation->set_rules('judul_tanya', 'Pertanyaan', 'trim|required');
        $this->form_validation->set_rules('jawaban_tanya', 'Isi Pertanyaan', 'trim|required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');


        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'id_faq' => $id,
                'judul_tanya' => $this->input->post('judul_tanya'),
                'jawaban_tanya' => $this->input->post('jawaban_tanya'),
                'CreateTime' =>  date('Y-m-d H:i:s')
            );

            $create = $this->setting->createfaq($data);
            if($create == true) {
                $this->session->set_flashdata('success', 'FAQ Berhasil Ditambah');
                redirect('Settings/faq', 'refresh');
            }
            else {
                $this->session->set_flashdata('error', 'FAQ gagal Ditambah');
                redirect('Settings/faq', 'refresh');
            }
        }
        else {
            $this->data['page_title'] = 'Tambah FAQ';
            $this->render_template('webmin/addfaq', $this->data);
        }

    }

    public function editfaq($id) {

        $this->form_validation->set_rules('judul_tanya', 'Pertanyaan', 'trim');
        $this->form_validation->set_rules('jawaban_tanya', 'Isi Pertanyaan', 'trim');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'judul_tanya' => $this->input->post('judul_tanya'),
                'jawaban_tanya' => $this->input->post('jawaban_tanya'),
                'UpdateTime' =>  date('Y-m-d H:i:s')
            );

            $create = $this->setting->updatefaq($data, $id);
            if($create == true) {
                $this->session->set_flashdata('success', 'FAQ Berhasil diubah');
                redirect('Settings/faq', 'refresh');
            }
            else {
                $this->session->set_flashdata('error', 'FAQ gagal diubah');
                redirect('Settings/faq', 'refresh');
            }
        }
        else {

            $this->data['faq'] = $this->setting->getfaqData($id);
            $this->data['page_title'] = 'Edit FAQ';
            $this->render_template('webmin/editfaq', $this->data);
        }

    }

}