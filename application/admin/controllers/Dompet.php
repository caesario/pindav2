<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dompet extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

//		$this->not_logged_in();

	}

    // AKUN DOMPET
	public function daftardompet() {


	    $this->data['page_title'] = 'Daftar Akun Dompet';
	    $this->render_template('dompet/daftarakun', $this->data);
    }


    public function test() {

	    $data = $this->dompet->getDompetData('ID-5cb2f4a9318f4');

	    echo json_encode($data);

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

    // END AKUN DOMPET

    // List Transaksi Topup



    public function daftartopup()
    {
        $this->data['page_title'] = 'Daftar Transaksi Top Up';
        $this->render_template('dompet/topuplist', $this->data);
    }

    public function fetchTopUpTransData($id) {


        $result = array('data' => array());

        $data = $this->dompet->getDompetTopUpDatalist($id);

        foreach ($data as $key => $value) {


            $user = $this->dompet->getDompetDetailData($value['id_dompet']);
            $konf = $this->dompet->getDompetKonfDetailData($value['id_dompet_trx']);
            // button
            $buttons = '';


            $buttons .= '<button type="button" class="btn btn-info" onclick="prosestransaksi(&quot;'.$value['id_dompet_trx'].'&quot;)" data-toggle="modal" data-target="#editTransModal"><i class="fas fa-arrow-circle-right"></i></button>';
            if( $value['status_trx'] == 2 ) {
                $buttons .= '<button type="button" class="btn btn-danger" onclick="prosesgagal(&quot;' . $value['id_dompet_trx'] . '&quot;)" data-toggle="modal" data-target="#GagalTransModal"><i class="fas fa-trash-alt"></i></button>';
            }

            $status = '';
            if($value['status_trx'] == 1) {
                $status = '<span class="label label-info">Belum Diproses</span>';
            } else if($value['status_trx'] == 2) {
                $status = '<span class="label label-warning">Proses</span>';
            } else if($value['status_trx'] == 3 ){
                $status = '<span class="label label-success">Top Up Berhasil</span>';
            } else if($value['status_trx'] == 4 ){
                $status = '<span class="label label-danger">Gagal</span>';
            }

            $statuskonf = '';
            if ( $value['amountkonf'] == $konf['amount_konf'] &&  $konf != null ) {
                $statuskonf = '<span class="label label-info">Terkonfirmasi & cocok</span>';
            } else if ($konf != null ){
                $statuskonf = '<span class="label label-info">Terkonfirmasi </span>';
            } else {
                $statuskonf = '<span class="label label-danger">Belum Konfirmasi</span>';
                $statuskonf = '<span class="label label-danger">Belum Konfirmasi</span>';
            }

            $type = '';
            if($value['trx_type'] == 1) {
                $type = '<span class="label label-success">Top Up </span>';
            } else if($value['trx_type'] == 2) {
                $type = '<span class="label label-danger">Withdraw</span>';
            }

            $result['data'][$key] = array(
                $value['id_dompet_trx'],
                $value['id_dompet'],
                $user[0]->username,
                $value['bankaccount'],
                $type,
                $value['amount'],
                $value['amountkonf'],
                $status,
                $statuskonf,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

    // list transaksi Top up proses

    public function daftartopupproses()
    {
        $this->data['page_title'] = 'Top Up - Proses';
        $this->render_template('dompet/topuplistproses', $this->data);
    }

    public function fetchDompetTrxDataById($id)
    {
            $data = $this->dompet->getDompetTrxDetailData($id);
            echo json_encode($data);
    }

    public function fetchDompetTrxKonfDataById($id) {

	    $data = $this->dompet->getDompetKonfbyDetailData($id);
	    echo json_encode($data);
    }

    public function prosestrxtwo() {

        $this->form_validation->set_rules('edit_iddompettrxpost', 'ID Dompet Transaksi', 'trim|required');
        if ($this->form_validation->run() == TRUE) {

            $id = $this->input->post('edit_iddompettrxpost');
            $detail_trx = $this->dompet->getDompetTrxDetailData($id);

            // data akun dompet
            $iddompet = $detail_trx[0]['id_dompet'];

            $nominal = array(
              'current_balance' => $detail_trx[0]['current_balance'] + $detail_trx[0]['amount']
            );

            // data status
            $data = array(
                'status_trx' => 3
            );

            $update = $this->dompet->updatetrx($data, $id);
            if($update == true) {
                $this->dompet->updatedompet($nominal, $iddompet);
                $response['success'] = true;
                $response['messages'] = 'Succesfully updated';
            }
            else {
                $response['success'] = false;
                $response['messages'] = 'Error in the database while updated the brand information';
            }

        } else {
            $response['success'] = false;
            foreach ($_POST as $key => $value) {
                $response['messages'][$key] = form_error($key);
            }
        }
        echo json_encode($response);
    }

    public function prosestrxgagal() {
        $response = array();
        $this->form_validation->set_rules('edit_iddompettrxgagalpost', 'ID Dompet Transaksi', 'trim|required');
        if ($this->form_validation->run() == TRUE) {

            $id = $this->input->post('edit_iddompettrxgagalpost');

            $data = array(
                'status_trx' => 4
            );

            $update = $this->dompet->updatetrx($data, $id);
            if($update == true) {
                $response['success'] = true;
                $response['messages'] = 'Succesfully updated';
            }
            else {
                $response['success'] = false;
                $response['messages'] = 'Error in the database while updated the brand information';
            }

        } else {
            $response['success'] = false;
            foreach ($_POST as $key => $value) {
                $response['messages'][$key] = form_error($key);
            }
        }
        echo json_encode($response);
    }


    public function daftartopupgagal()
    {
        $this->data['page_title'] = 'Daftar Transaksi Top Up Gagal';
        $this->render_template('dompet/topuplistgagal', $this->data);
    }

    public function daftartopupberhasil()
    {
        $this->data['page_title'] = 'Daftar Transaksi Top Up Berhasil';
        $this->render_template('dompet/topuplistberhasil', $this->data);

    }

    public function daftarwithdraw()
    {
        $this->data['page_title'] = 'Daftar Transaksi Withdraw';
        $this->render_template('dompet/withdrawlist', $this->data);

    }

    public function daftarwithdrawproses()
    {
        $this->data['page_title'] = 'Withdraw - Proses';
        $this->render_template('dompet/withdrawproses', $this->data);
    }

    public function daftarwithdrawgagal()
    {
        $this->data['page_title'] = 'Withdraw - Gagal';
        $this->render_template('dompet/withdrawgagal', $this->data);
    }

    public function daftarwithdrawberhasil()
    {
        $this->data['page_title'] = 'Withdraw - berhasil';
        $this->render_template('dompet/withdrawberhasil', $this->data);
    }

    public function fetchWithdrawTransData($id) {


        $result = array('data' => array());

        $data = $this->dompet->getDompetWithdrawDatalist($id);

        foreach ($data as $key => $value) {


            $user = $this->dompet->getDompetDetailData($value['id_dompet']);
            $konf = $this->dompet->getDompetKonfDetailData($value['id_dompet_trx']);
            // button
            $buttons = '';


            $buttons .= '<button type="button" class="btn btn-info" onclick="prosestransaksi(&quot;'.$value['id_dompet_trx'].'&quot;)" data-toggle="modal" data-target="#editTransModal"><i class="fas fa-arrow-circle-right"></i></button>';
            if( $value['status_trx'] == 2 ) {
                $buttons .= '<button type="button" class="btn btn-danger" onclick="prosesgagal(&quot;' . $value['id_dompet_trx'] . '&quot;)" data-toggle="modal" data-target="#GagalTransModal"><i class="fas fa-trash-alt"></i></button>';
            }

            $status = '';
            if($value['status_trx'] == 1) {
                $status = '<span class="label label-info">Belum Diproses</span>';
            } else if($value['status_trx'] == 2) {
                $status = '<span class="label label-warning">Proses</span>';
            } else if($value['status_trx'] == 3 ){
                $status = '<span class="label label-success">Withdraw Berhasil</span>';
            } else if($value['status_trx'] == 4 ){
                $status = '<span class="label label-danger">Gagal</span>';
            }

            $statuskonf = '';
            if ( $value['amountkonf'] == $konf['amount_konf'] &&  $konf != null ) {
                $statuskonf = '<span class="label label-info">Terkonfirmasi & cocok</span>';
            } else if ($konf != null ){
                $statuskonf = '<span class="label label-info">Terkonfirmasi </span>';
            } else {
                $statuskonf = '<span class="label label-danger">Belum Konfirmasi</span>';
                $statuskonf = '<span class="label label-danger">Belum Konfirmasi</span>';
            }

            $type = '';
            if($value['trx_type'] == 1) {
                $type = '<span class="label label-success">Top Up </span>';
            } else if($value['trx_type'] == 2) {
                $type = '<span class="label label-danger">Withdraw</span>';
            }

            $result['data'][$key] = array(
                $value['id_dompet_trx'],
                $value['id_dompet'],
                $user[0]->username,
                $value['bankaccount'],
                $type,
                $value['amount'],
                $status,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

}