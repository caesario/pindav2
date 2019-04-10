<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

//		$this->not_logged_in();

		$this->data['page_title'] = 'Category';

		$this->load->model('model_category');
	}

	/* 
	* It only redirects to the manage category page
	*/
	public function index()
	{

        $this->data['icon'] = $this->model_category->getAllIcon();
		$this->render_template('kategori/index', $this->data);
	}


    public function fetchCategoryData()
    {
        $result = array('data' => array());

        $data = $this->model_category->getCategoryData();

        foreach ($data as $key => $value) {
            $icon = $this->model_category->getIconCategoryData($value['icon']);
            // button
            $buttons = '';


                $buttons .= '<button type="button" class="btn btn-warning" onclick="editCategory(&quot;'.$value['id_kategori'].'&quot;)" data-toggle="modal" data-target="#editModal"><i class="fas fa-pencil-alt"></i></button>';

                $buttons .= ' <button type="button" class="btn btn-danger" onclick="removeFunc(&quot;'.$value['id_kategori'].'&quot;)" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';

            $img = '<img src="'.base_url($icon['icon']).'" alt="'.$value['id_kategori'].'" class="img-circle" width="50" height="50" />';


            $status = '';
            if($value['status'] == 1) {
                $status = '<span class="label label-success">Aktif</span>';
            } else if($value['status'] == 2) {
                $status = '<span class="label label-danger">Tidak Aktif</span>';
            }

            $result['data'][$key] = array(
                $img,
                $value['nama_kategori'],
                $status,
                $buttons
            );
        } // /foreach

        echo json_encode($result);
    }

    public function fetchCategoryDataById($id)
    {
        if($id) {
            $data = $this->model_category->getAllKategoriDataIcon($id);
            echo json_encode($data);
        }

        return false;
    }
    public function tambahicon() {
        $idic = uniqid('icon-');
        $this->form_validation->set_rules('nama_icon', 'Nama Icon', 'trim|required');

        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {

            $iconupload = $this->upload_icon();
            $icondata = array(
                'id_icon' => $idic,
                'nama_icon' => $this->input->post('nama_icon'),
                'icon' => $iconupload
            );

            $createicon = $this->model_category->createicon($icondata);
            if($createicon == true) {
                $this->session->set_flashdata('success', 'Icon Berhasil Ditambah');
                redirect('Category', 'refresh');
            }


            else {
                $this->session->set_flashdata('error', 'Icon Gagal Ditambah');
                redirect('Category', 'refresh');
            }
        }
    }
	public function tambah() {

        $response = array();
        $id = uniqid('KAT-');
        $this->form_validation->set_rules('nama_kategori', 'Kategori', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        $this->form_validation->set_rules('icon', 'Icon', 'trim');

        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {


            $data = array(
                'id_kategori' => $id,
                'icon' => $this->input->post('icon'),
                'nama_kategori' => $this->input->post('nama_kategori'),
                'status' => $this->input->post('status'),
            );

            $create = $this->model_category->create($data);
            if($create == true) {
                $response['success'] = true;
                $response['messages'] = 'Succesfully created';
            }
            else {
                $response['success'] = false;
                $response['messages'] = 'Error in the database while creating the brand information';
            }
        }
        else {
            $response['success'] = false;
            foreach ($_POST as $key => $value) {
                $response['messages'][$key] = form_error($key);
            }
        }

        echo json_encode($response);
    }


    public function upload_icon()
    {
        // assets/images/product_image
        $config['upload_path'] = 'assets/admin/iconcat';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|png|svg';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('iconcat'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['iconcat']['name']);
            $type = $type[count($type) - 1];

            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;
        }
    }
    public function update($id)
    {

        $response = array();

        if($id) {
            $this->form_validation->set_rules('edit_category_name', 'Nama Kategori', 'trim|required');
            $this->form_validation->set_rules('edit_status', 'Status', 'trim|required');
            $this->form_validation->set_rules('edit_icon', 'Icon', 'trim|required');

            $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

            if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'nama_kategori' => $this->input->post('edit_category_name'),
                    'status' => $this->input->post('edit_status'),
                    'icon' => $this->input->post('edit_icon'),
                );

                $update = $this->model_category->update($data, $id);
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



    // Hapus Kategori

    public function remove()
    {

        $category_id = $this->input->post('category_id');
        $response = array();
        if($category_id) {
            $delete = $this->model_category->remove($category_id);

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


}