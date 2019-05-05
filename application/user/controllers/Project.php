<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {

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

    public function __construct()
    {
        parent::__construct();

//		$this->not_logged_in();
    }
	public function index()
	{
		$this->load->view('Proyek/Buatproyek');
	}

	public function init() {


        $this->data['page_title'] = 'Buat Proyek';
        $this->render_template('Proyek/initproyek', $this->data);

    }

    public function category() {
        $this->data['category'] = $this->category->getCategoryDataAll();
        $this->data['page_title'] = 'Pilih Kategori';
        $this->render_template('Proyek/selectcategory', $this->data);

    }

    public function info() {

        $this->data['page_title'] = 'Informasi Umum';
        $this->render_template('Proyek/infoumum', $this->data);

    }

    public function infotim() {

        $this->data['page_title'] = 'Informasi Tim';
        $this->render_template('Proyek/infotim', $this->data);
    }

    public function pembayaran() {

        $this->data['page_title'] = 'Pembayaran';
        $this->render_template('Proyek/infopemb', $this->data);
    }

    public function seleksi($id) {

        $detailproyek = $this->proyek->getDetailProyek($id);
        $detailproyek = $detailproyek[0];

        $detailuser = $this->user->getUserDetail($detailproyek->id_user);
        $category = $this->category->getCategoryDetail($detailproyek->id_kategori);
        $totalterima = $this->proyek->getTotalTerimaUser($detailproyek->id_proyek);

        $dategabung = strtotime($detailuser[0]['CreateTime']);
        $dategabung = date('d F Y', $dategabung);

        $now = time(); // or your date as well
        $your_date = strtotime($detailproyek->DateAkhir);
        $datediff = $now - $your_date;

        if ($datediff < 0 ) {
            $sisahari = 0;
        } else {
            $sisahari =  round($datediff / (60 * 60 * 24));
        }
        $result = array(
            'id_proyek' => $detailproyek->id_proyek,
            'status_proyek' => $detailproyek->status_proyek,
            'nama_proyek' => $detailproyek->nama_proyek,
            'jenis' => $detailproyek->jenis,
            'sisa_hari' => $sisahari,
            'nilai_pembayaran' => $detailproyek->nilai_pembayaran,
            'butuh_anggota' => $detailproyek->qty_member,
            'nama_user' => $detailuser[0]['nama_user'],
            'foto_user' => $detailuser[0]['photo'],
            'nama_kategori' => $category[0]['nama_kategori'],
            'tagline' => $detailproyek->tagline,
            'detail_proyek' => $detailproyek->detail_proyek,
            'teks_desain' => $detailproyek->teks_desain,
            'date_gabung' => $dategabung,
            'total_terima' => $totalterima
        );

        $this->data['page_title'] = 'Seleksi Submit';
        $this->data['detailproyek'] =  $result;
        $this->render_template('Proyek/seleksiproyek', $this->data);
    }





    public function submitdesain($id)
    {
        $this->data['page_title'] = 'submit Desain';
        $this->data['id_proyek'] = $id;
        $this->render_template('submit/submitdesain', $this->data);
    }

    public function bergabung($id)
    {
        $this->data['page_title'] = 'Submit Lamaran';
        $this->data['id_proyek'] = $id;
        $this->render_template('submit/submitlamaran', $this->data);
    }
    
    public function submitide($id)
    {
        $this->data['page_title'] = 'Submit Ide/Saran';
        $detailproyek = $this->proyek->getDetailProyek($id);
        $detailproyek = $detailproyek[0];

        $now = time(); // or your date as well
        $your_date = strtotime($detailproyek->DateAkhir);
        $datediff = $now - $your_date;

        if ($datediff < 0 ) {
            $sisahari = 0;
        } else {
            $sisahari =  round($datediff / (60 * 60 * 24));
        }


        $this->data['proyek'] = $detailproyek;
        $this->data['sisawaktu'] = $sisahari;
        $this->render_template('submit/submitide', $this->data);
    }


    public function detail($id)
    {

        $detailproyek = $this->proyek->getDetailProyek($id);
        $detailproyek = $detailproyek[0];

        $detailuser = $this->user->getUserDetail($detailproyek->id_user);
        $category = $this->category->getCategoryDetail($detailproyek->id_kategori);
        $totalterima = $this->proyek->getTotalTerimaUser($detailproyek->id_proyek);

        $dategabung = strtotime($detailuser[0]['CreateTime']);
        $dategabung = date('d F Y', $dategabung);

        $now = time(); // or your date as well
        $your_date = strtotime($detailproyek->DateAkhir);
        $datediff = $now - $your_date;

        if ($datediff < 0 ) {
            $sisahari = 0;
        } else {
            $sisahari =  round($datediff / (60 * 60 * 24));
        }
        $result = array(
            'id_proyek' => $detailproyek->id_proyek,
            'status_proyek' => $detailproyek->status_proyek,
            'nama_proyek' => $detailproyek->nama_proyek,
            'jenis' => $detailproyek->jenis,
            'sisa_hari' => $sisahari,
            'nilai_pembayaran' => $detailproyek->nilai_pembayaran,
            'butuh_anggota' => $detailproyek->qty_member,
            'nama_user' => $detailuser[0]['nama_user'],
            'foto_user' => $detailuser[0]['photo'],
            'nama_kategori' => $category[0]['nama_kategori'],
            'tagline' => $detailproyek->tagline,
            'detail_proyek' => $detailproyek->detail_proyek,
            'teks_desain' => $detailproyek->teks_desain,
            'date_gabung' => $dategabung,
            'total_terima' => $totalterima
        );

        $this->data['page_title'] = 'Detail Proyek';
        $this->data['detailproyek'] =  $result;
        $this->render_template('Proyek/detail', $this->data);
    }



    public function allproject()
    {

        $result = array('data' => array());

        $data = $this->proyek->getAllProyekData();

        foreach ($data as $key => $value) {



            $user = $this->user->getUserDetail($value['id_user']);
            $category = $this->category->getCategoryDetail($value['id_kategori']);
            $totallamar = $this->proyek->getTotalLamarProyek($value['id_proyek']);
            $totalide = $this->proyek->getTotalIdeProyek($value['id_proyek']);
            $totaldesain = $this->proyek->getTotalDesainProyek($value['id_proyek']);

            $now = time(); // or your date as well
            $your_date = strtotime($value['DateAkhir']);
            $datediff = $now - $your_date;

            if ($datediff < 0 ) {
                $sisahari = 0;
            } else {
                $sisahari =  round($datediff / (60 * 60 * 24));
            }

            $result['data'][$key] = array(
                'id_proyek' => $value['id_proyek'],
                'nama_proyek' => $value['nama_proyek'],
                'detail_proyek' => $value['detail_proyek'],
                'nama_user' => $user[0]['nama_user'],
                'nama_kategori' => $category[0]['nama_kategori'],
                'total_lamar' => $totallamar,
                'total_ide' =>  $totalide,
                'total_desain' => $totaldesain,
                'tanggal_awal' => $value['DateAwal'],
                'sisa_hari' => $sisahari,
                'nilai_pembayaran' => $value['nilai_pembayaran'],
            );
        } // /foreach



        $this->data['proyek'] = $result['data'];
        $this->data['page_title'] = 'Semua Proyek';
        $this->render_template('Proyek/semuaproyek', $this->data);
    }

}
