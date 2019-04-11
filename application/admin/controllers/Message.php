<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

//		$this->not_logged_in();

		$this->data['page_title'] = 'Pesan';


	}

    public function index()
    {
        $this->render_template('pesan/index', $this->data);
    }


    public function edit($id)
    {
        $this->data['page_title'] = 'Edit Artikel';
        $this->data['detailartikel'] = $this->artikel->getArtikelDataDetail($id);
        $this->data['admin'] = $this->admin->getAdminData();
        $this->render_template('artikel/edit', $this->data);
    }


    public function update() {

        $this->form_validation->set_rules('id_artikel', 'ID Artikel', 'trim');
        $this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'trim');
        $this->form_validation->set_rules('isi_artikel', 'Isi Artikel', 'trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal Waktu', 'trim');
        $this->form_validation->set_rules('id_admin', 'Admin', 'trim');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');


        if ($this->input->post('tanggal')!= null){
            $myTime = strtotime($this->input->post('tanggal'));
            $tanggal= date("Y-m-d H:i:s", $myTime);
        } else {

            $tanggal = $this->input->post('tanggal_seb');
        }
        $id_artikel = $this->input->post('id_artikel');
        if ($this->form_validation->run() == TRUE) {
            // true case




            $data = array(
                'judul_artikel' => $this->input->post('judul_artikel'),
                'isi_artikel' => $this->input->post('isi_artikel'),
                'tgl_artikel' => $tanggal,
                'id_admin' => $this->input->post('id_admin'),
                'UpdateTime' => date("Y-m-d h:i:s")
            );


            if($_FILES['artikel_gambar']['size'] > 0) {
                $upload_image = $this->upload_gambarartikel();
                $upload_image = array('gambar_artikel' => $upload_image);

                $this->artikel->update($upload_image, $id_artikel);
            }

            $update = $this->artikel->update($data, $id_artikel);
            if($update == true) {
                $this->session->set_flashdata('success', 'Successfully updated');
                redirect('Article', 'refresh');
            }
            else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('Article/edit'.$id_artikel, 'refresh');
            }
        }
        else {
            $this->session->set_flashdata('errors', 'Error occurred!!');
            redirect('Article/edit'.$id_artikel, 'refresh');
        }
    }
	/* 
	* It only redirects to the manage category page
	*/



    public function fetchMessageData()
    {
        $result = array('data' => array());

        $data = $this->pesan->getMessageData();

        foreach ($data as $key => $value) {
            // button
            $buttons = '';


            $buttons .= '<button type="button" class="btn btn-warning" onclick="editCategory(&quot;'.$value['id_pesan'].'&quot;)" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></button>';

            $buttons .= ' <button type="button" class="btn btn-danger" onclick="removeFunc(&quot;'.$value['id_pesan'].'&quot;)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';


            $status = '';
            if($value['status'] == 1) {
                $status = '<span class="label label-success">Aktif</span>';
            } else if($value['status'] == 2) {
                $status = '<span class="label label-danger">Tidak Aktif</span>';
            } else {
                $status = '<span class="label label-danger">Tidak Diketahui</span>';
            }


            $result['data'][$key] = array(
                $value['id_pesan'],
                $value['nama_anda'],
                $value['nomor_anda'],
                $value['email_anda'],
                $status,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

    public function add() {

        $response = array();
        $id = uniqid('ART-');
        $this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'trim|required');
        $this->form_validation->set_rules('isi_artikel', 'Isi Artikel', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Waktu', 'trim|required');
        $this->form_validation->set_rules('id_admin', 'Admin', 'trim|required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        $myTime = strtotime($this->input->post('tanggal'));
        $time = date("Y-m-d H:i:s", $myTime);
        if ($this->form_validation->run() == TRUE) {

            $uploadgambar = $this->upload_gambarartikel();
            $data = array(
                'id_artikel' => $id,
                'judul_artikel' => $this->input->post('judul_artikel'),
                'isi_artikel' => $this->input->post('isi_artikel'),
                'tgl_artikel' => $time,
                'id_admin' => $this->input->post('id_admin'),
                'gambar_artikel' => $uploadgambar,
                'CreateTime' =>  date('Y-m-d H:i:s')
            );

            $create = $this->artikel->create($data);
            if($create == true) {
                $this->session->set_flashdata('success', 'Artikel Berhasil Ditambah');
                redirect('Article', 'refresh');
            }
            else {
                $this->session->set_flashdata('error', 'Artikel gagal Ditambah');
                redirect('Article', 'refresh');
            }
        }
        else {
            $this->data['page_title'] = 'Tambah Artikel';
            $this->data['admin'] = $this->admin->getAdminData();
            $this->render_template('artikel/add.php', $this->data);
        }

    }



    public function remove()
    {

        $artikel_id = $this->input->post('artikel_id');
        $response = array();
        if( $artikel_id ) {
            $delete = $this->artikel->remove($artikel_id );

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



    public function upload_gambarartikel()
    {
        // assets/images/product_image
        $config['upload_path'] = 'assets/admin/gambarartikel';
        $config['file_name'] =  uniqid('art');
        $config['allowed_types'] = 'gif|jpg|png|svg';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('artikel_gambar'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['artikel_gambar']['name']);
            $type = $type[count($type) - 1];

            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;
        }
    }

}