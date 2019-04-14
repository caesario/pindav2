<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dompet extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

//		$this->not_logged_in();

	}


	public function daftardompet() {


	    $this->data['page_title'] = 'Daftar Akun Dompet';
	    $this->render_template('dompet/daftarakun', $this->data);
    }

    public function fetchAkunDompetData()
    {
        $result = array('data' => array());

        $data = $this->dompet->getDompetData();

        foreach ($data as $key => $value) {


            $user = $this->user->getUserData($value['id_user']);
            // button
            $buttons = '';


            $buttons .= '<button type="button" class="btn btn-info" onclick="editDompet(&quot;'.$value['id_dompet'].'&quot;)" data-toggle="modal" data-target="#editDompetModal"><i class="fas fa-pencil-alt"></i></button>';


            $status = '';
            if($value['status_dompet'] == 1) {
                $status = '<span class="label label-success">Aktif</span>';
            } else if($value['status_dompet'] == 2) {
                $status = '<span class="label label-danger">Tidak Aktif</span>';
            }

            $result['data'][$key] = array(
                $value['id_dompet'],
                $user['username'],
                $value['current_balance'],
                $status,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

    public function fetchDompetDataById($id)
    {
        if($id) {
            $data = $this->dompet->getDompetDetailData($id);
            echo json_encode($data);
        }

    }

    public function editakundompet($id)
    {
	    $response = array();
        if($id) {
            $this->form_validation->set_rules('edit_status', 'Status', 'trim');
            $this->form_validation->set_rules('edit_keterangandompet', 'Keterangan', 'trim');

            $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

            if ($this->form_validation->run() == TRUE) {

                $id = $this->input->post('edit_akundompetpost');
                $data = array(
                    'status_dompet' => $this->input->post('edit_status'),
                    'keterangan_dompet' => $this->input->post('edit_keterangandompet'),
                    'UpdateTime' => date("Y-m-d h:i:s")
                );

                $update = $this->dompet->updatedompet($data, $id);
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