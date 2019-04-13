<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

//		$this->not_logged_in();

	}

    public function index()
    {
        $this->data['page_title'] = 'User';
        $this->render_template('user/index', $this->data);
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



    public function fetchUserData()
    {
        $result = array('data' => array());

        $data = $this->user->getUserData();

        foreach ($data as $key => $value) {
            // button
            $buttons = '';


            $buttons .= '<button type="button" class="btn btn-warning" onclick="editCategory(&quot;'.$value['id_user'].'&quot;)" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></button>';

            $buttons .= ' <button type="button" class="btn btn-danger" onclick="removeFunc(&quot;'.$value['id_user'].'&quot;)" data-toggle="modal" data-target="#removeUserModal"><i class="fa fa-trash"></i></button>';




            $result['data'][$key] = array(
                $value['id_user'],
                $value['nama_user'],
                $value['username'],
                $value['email'],
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

    public function adduser() {

        $iduser = uniqid('USR-');
        $iddompet = uniqid('ID-');
        $this->form_validation->set_rules('username_user', 'Username', 'trim|required');
        $this->form_validation->set_rules('namauser_user', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('email_user', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password_user', 'Kata Sandi', 'trim|required');
        $this->form_validation->set_rules('passwordkonf_user', 'Konfirmasi Kata Sandi', 'trim|required|matches[password_user]');
        $this->form_validation->set_rules('telephone_user', 'Telephone', 'trim|required');
        $this->form_validation->set_rules('pekerjaan_user', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {

            $uploadfoto = $this->upload_photouser();
            $data = array(
                'id_user' => $iduser,
                'username' => $this->input->post('username_user'),
                'nama_user'=> $this->input->post('namauser_user'),
                'password' => md5($this->input->post('password_user')),
                'email' => $this->input->post('email_user'),
                'telephone' => $this->input->post('telephone_user'),
                'photo' => $uploadfoto,
                'pekerjaan' => $this->input->post('pekerjaan_user'),
                'CreateTime' =>  date('Y-m-d H:i:s')
            );

            $datadompet = array (
                'id_dompet' => $iddompet,
                'id_user' => $iduser,
                'current_balance' => 0,
                'CreateTime' =>  date('Y-m-d H:i:s')
            );

            $create = $this->user->createuser($data);

            if($create == true) {
                $this->dompet->createdompet($datadompet);
                $this->session->set_flashdata('success', 'User  Berhasil Ditambah');
                redirect('User', 'refresh');
            }
            else {
                $this->session->set_flashdata('error', 'User gagal Ditambah');
                redirect('User', 'refresh');
            }
        }
        else {

            $this->data['page_title'] = 'Tambah User';
            $this->render_template('user/adduser', $this->data);
        }

    }



    public function remove()
    {

        $user_id = $this->input->post('user_id');
        $response = array();
        if( $user_id ) {
            $delete = $this->user->remove($user_id );

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



    public function upload_photouser()
    {
        // asset/imguser/
        $config['upload_path'] = 'assets/imguser';
        $config['file_name'] =  uniqid('usrpht');
        $config['allowed_types'] = 'gif|jpg|png|svg';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('user_photo'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['user_photo']['name']);
            $type = $type[count($type) - 1];

            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;
        }
    }

}