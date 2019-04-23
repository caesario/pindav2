<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
    public function __construct()
    {
        parent::__construct();


    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
    {

//        Hitung persen

        $totalproyek = $this->setting->getProyekTotal();
        $databerhasil = $this->setting->getProyekBerhasil();
        $persenberhasil = $databerhasil/$totalproyek *100;

        $dataproses = $this->setting->getProyekProses();
        $persenproses = $dataproses/$totalproyek * 100;

        $datagagal = $this->setting->getProyekGagal();
        $persengagal = $datagagal/$totalproyek * 100;




        $proyekdata = array(
            'totalproyek' => $totalproyek,
            'databerhasil' => $databerhasil,
            'persenberhasil' => $persenberhasil,
            'dataproses' => $dataproses,
            'persenproses' => $persenproses,
            'datagagal' => $datagagal,
            'persengagal' => $persengagal

        );


        $totalide = $this->setting->getTotalSubmitIde();
        $totallamar = $this->setting->getTotalLamar();
        $totalsubmit = $this->setting->getTotalSubmitDesain();

        $total_submit = $totalide + $totallamar + $totalsubmit;


        $this->data['total_point'] = $this->user->getPointTotal();
        $this->data['total_submisi'] = $total_submit;
        $this->data['total_proyek'] = $this->setting->getProyekBerhasil();
        $this->data['page_title'] = 'Dashboard';
        $this->data['total_user'] = $this->user->getUserTotal();
        $this->data['chartproyek'] = $proyekdata;
        $this->render_template('Dashboard', $this->data);
    }

    public function fetchUserNewData()
    {
        $result = array('data' => array());

        $data = $this->setting->getUserNewData();

        foreach ($data as $key => $value) {
            // button


            $result['data'][$key] = array(
                $value['id_user'],
                $value['nama_user'],
                $value['username'],
                $value['email']
            );
        } // /foreach

        echo json_encode($result);


    }

    public function fetchProyekNewData()
    {
        $result = array('data' => array());

        $data = $this->setting->getProyekUserData();

        foreach ($data as $key => $value) {



            $user = $this->user->getUserData($value['id_user']);
            $kategori = $this->category->getCategoryData($value['id_kategori']);
            // button

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
            );
        } // /foreach

        echo json_encode($result);
    }



}
