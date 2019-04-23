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
}
