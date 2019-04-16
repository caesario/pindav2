<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller
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



    public function fetchMessageData()
    {
        $result = array('data' => array());

        $data = $this->pesan->getMessageData();

        foreach ($data as $key => $value) {
            // button
            $buttons = '';


            $buttons .= '<button type="button" class="btn btn-warning" onclick="editPesan(&quot;'.$value['id_pesan'].'&quot;)" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></button>';

            $buttons .= ' <button type="button" class="btn btn-danger" onclick="removeFunc(&quot;'.$value['id_pesan'].'&quot;)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';


            $status = '';
            if($value['status'] == 1) {
                $status = '<span class="label label-success">Belum Dibaca</span>';
            } else if($value['status'] == 2) {
                $status = '<span class="label label-danger">Sudah Dibaca</span>';
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

    public function fetchMessageDataById($id)
    {
        if($id) {
            $data = $this->pesan->getMessageData($id);
            echo json_encode($data);
        }

        return false;
    }


    public function update($id)
    {

        $response = array();

        if($id) {
            $this->form_validation->set_rules('edit_status', 'Status', 'trim');


            $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'status' => $this->input->post('edit_status')
                );

                $update = $this->pesan->update($data, $id);
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

}