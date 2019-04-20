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