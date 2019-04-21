<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

//		$this->not_logged_in();



	}

    public function index()
    {

        $this->data['page_title'] = 'Daftar Proyek';
        $this->render_template('proyek/index', $this->data);
    }

    public function fetchProyekData()
    {
        $result = array('data' => array());

        $data = $this->proyek->getProjectData();

        foreach ($data as $key => $value) {



            $user = $this->user->getUserData($value['id_user']);
            $kategori = $this->category->getCategoryData($value['id_kategori']);
            // button
            $buttons = '';

            $link_address = site_url('Project/editpage/'.$value['id_proyek']);
            $buttons .= '<a href="'.$link_address.'"class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>';

            $buttons .= ' <button type="button" class="btn btn-danger" onclick="removeFunc(&quot;' . $value['id_proyek'] . '&quot;)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';


            $status = '';
            if ($value['status_proyek'] == 1) {
                $status = '<span class="label label-warning">Proses</span>';
            } else if ($value['status_proyek'] == 2) {
                $status = '<span class="label label-success">Berhasil & Selesai</span>';
            } else {
                $status = '<span class="label label-danger">Gagal</span>';
            }

            $tipe = '';
            if  ($value['jenis'] == 1 ){
                $tipe = '<span class="label label-info">Campaign</span>';
            } else if ($value['jenis'] == 2 ){
                $tipe = '<span class="label label-info">Find Partner</span>';
            } else {
                $tipe = '<span class="label label-danger">Tidak Diketahui</span>';
            }


            $result['data'][$key] = array(
                $value['id_proyek'],
                $value['nama_proyek'],
                $user['nama_user'],
                $tipe,
                $kategori['nama_kategori'],
                $value['DateAwal'],
                $value['DateAkhir'],
                $status,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

    public function fetchSubmitData($id)
{
    $result = array('data' => array());

    $data = $this->proyek->getSubmitData($id);

    foreach ($data as $key => $value) {

        // button
        $buttons = '';

        $buttons .= ' <button type="button" class="btn btn-danger" onclick="removeSubmit(&quot;' . $value['id_submit'] . '&quot;)" data-toggle="modal" data-target="#removeSubmit"><i class="fa fa-trash"></i></button>';


        $status = '';
        if ($value['status_submit'] == 1) {
            $status = '<span class="label label-warning">Belum Diterima</span>';
        } else if ($value['status_submit'] == 2) {
            $status = '<span class="label label-success">Diterima</span>';
        } else {
            $status = '<span class="label label-danger">Ditolak</span>';
        }

        $result['data'][$key] = array(
            $value['id_submit'],
            $value['nama_user'],
            $value['file_submit'],
            $value['keterangan_submit'],
            $status,
            $buttons
        );
    } // /foreach

    echo json_encode($result);
}

    public function fetchApplyData($id)
    {
        $result = array('data' => array());

        $data = $this->proyek->getApplyData($id);

        foreach ($data as $key => $value) {

            // button
            $buttons = '';

            $buttons .= ' <button type="button" class="btn btn-danger" onclick="removeApply(&quot;' . $value['id_lamar'] . '&quot;)" data-toggle="modal" data-target="#removeApply"><i class="fa fa-trash"></i></button>';


            $status = '';
            if ($value['status'] == 1) {
                $status = '<span class="label label-warning">Belum Diterima</span>';
            } else if ($value['status'] == 2) {
                $status = '<span class="label label-success">Diterima</span>';
            } else {
                $status = '<span class="label label-danger">Ditolak</span>';
            }

            $result['data'][$key] = array(
                $value['id_lamar'],
                $value['nama_user'],
                $value['remarks'],
                $value['file_cv'],
                $status,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

    public function fetchIdeData($id)
    {
        $result = array('data' => array());

        $data = $this->proyek->getIdeData($id);

        foreach ($data as $key => $value) {

            // button
            $buttons = '';

            $buttons .= ' <button type="button" class="btn btn-danger" onclick="removeIde(&quot;' . $value['id_ide'] . '&quot;)" data-toggle="modal" data-target="#removeIde"><i class="fa fa-trash"></i></button>';


            $status = '';
            if ($value['point'] == 1) {
                $status = '<span class="label label-warning">Belum menerima point</span>';
            } else if ($value['point'] == 2) {
                $status = '<span class="label label-success">Sudah Diberikan Point</span>';
            } else {
                $status = '<span class="label label-danger">Ditolak</span>';
            }

            $result['data'][$key] = array(
                $value['id_ide'],
                $value['nama_user'],
                $value['ide_saran'],
                $status,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

    public function hapussubmit()
    {

        $submit_id = $this->input->post('submit_id');
        $response = array();
        if($submit_id) {
            $delete = $this->proyek->removeSubmit($submit_id);

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

    public function hapusapply()
    {

        $apply_id = $this->input->post('apply_id');
        $response = array();
        if($apply_id) {
            $delete = $this->proyek->removeApply($apply_id);

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

    public function hapuside()
    {

        $ide_id = $this->input->post('ide_id');
        $response = array();
        if($ide_id) {
            $delete = $this->proyek->removeIde($ide_id);

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


    public function editpage($id) {

	    $dataproyek = $this->proyek->getProjectData($id);
	    $this->data['datauser'] = $this->user->getUserData($dataproyek['id_user']);
        $this->data['datakategori'] = $this->category->getCategoryData($dataproyek['id_kategori']);
        $this->data['detailproyek'] = $this->proyek->getProjectData($id);
        $this->data['list_kategori'] = $this->category->getCategoryData();
	    $this->data['page_title'] = 'Detail Proyek';
	    $this->render_template('proyek/detail', $this->data);
    }

}