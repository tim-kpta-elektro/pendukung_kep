<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Semkp extends MY_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->load->model('KpModel');
		$this->load->library('form_validation');
    }

    function index(){

        $session = $_SESSION['nim'];
        $ruang = $this->KpModel->ruang();
        $data = $this->KpModel->semkp($session);
        $pending = $this->KpModel->pending_semkp($session);
        $setuju = $this->KpModel->setuju_semkp($session);
        $tolak = $this->KpModel->tolak_semkp($session);
        
        //var_dump($ruang);
        if($setuju != NULL){
            $this->load->view('kp/semkp_setuju',['setuju' => $setuju]);
        }elseif($pending != NULL){
            $this->load->view('kp/semkp_pending',['pending' => $pending]);
        }elseif($tolak != NULL){
            $this->load->view('kp/semkp_tolak',['tolak' => $tolak,'ruang' => $ruang]);
        }elseif($data != NULL){
            $this->load->view('kp/semkp_pengajuan',['data' => $data,'ruang' => $ruang]);
        }else{
            $this->load->view('kp/error_pengajuan');
        }
    }

    public function store(){
        $validation = $this->form_validation;
        $validation->set_rules('ipk','IPK','required');
        $validation->set_rules('sks','SKS','required');
        $validation->set_rules('judul_seminar','Judul Seminar','required');

        if($validation->run() == FALSE){
            redirect('pengajuansemkp');
        }else{
            $this->KpModel->store_semkp();
            redirect('dashboard');
        }
    }

    public function cetak_pengajuansemkp(){
        $session = $_SESSION['nim'];
		$data = $this->KpModel->pending_semkp($session);

		$this->pdf->setPaper('A4','potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
		$this->pdf->filename = "pengajuan_seminarkp.pdf";
		$this->pdf->load_view('kp/cetak_pengajuansemkp',['data' => $data]);
    }

    public function cetak_undangan(){
        $session = $_SESSION['nim'];
		$data = $this->KpModel->undangan($session);
        $dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);
		$this->pdf->setPaper('A4','potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
		$this->pdf->filename = "undangan_seminarkp.pdf";
		$this->pdf->load_view('kp/cetak_undangan',['data' => $data,'dayList' => $dayList]);
    }

    public function cetak_daftarhadir(){
        $session = $_SESSION['nim'];
		$data = $this->KpModel->setuju_semkp($session);
        
		$this->pdf->setPaper('A4','potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
		$this->pdf->filename = "daftarhadir_seminarkp.pdf";
		$this->pdf->load_view('kp/cetak_daftarhadir',['data' => $data]);
    }
}