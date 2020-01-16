<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kp extends MY_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->load->model('KpModel');
		$this->load->library('form_validation');
		if ($this->session->userdata('level') != '1') {
            redirect("dashboard");
        }
	}
	
	function index(){

		$session = $_SESSION['nim'];
		$result= $this->KpModel->mahasiswa($session);
		$pending = $this->KpModel->pending($session);
		$setuju = $this->KpModel->setuju($session);
		$tolak = $this->KpModel->tolak($session);
		$waiting = $this->KpModel->waiting($session);

		if($setuju != NULL){
			$this->load->view('kp/kp_setuju',['setuju' => $setuju]);
		}else if($waiting != NULL){
			$this->load->view('kp/kp_waiting',['waiting' => $waiting]);
		}else if($pending != NULL){
			$this->load->view('kp/kp_pending',['data' => $pending]);
		}elseif($tolak != NULL){
			$this->load->view('kp/kp_tolak',['tolak' => $tolak]);
		}else if($result != NULL){
			$this->load->view('kp/kp_pengajuan',['data' => $result]);
		}else{
			$this->load->view('kp/error_pem');
		}
	}

	public function store(){
		$validation = $this->form_validation;

		//$validation->set_rules('mahasiswa_id','Mahasiswa Id','required');
		$validation->set_rules('sks','SKS','required');
		$validation->set_rules('ipk','IPK','required');
		$validation->set_rules('perusahaan_nama','Perusahaan Nama','required');

		if($validation->run() == FALSE){
			redirect('pengajuankp');
		}else{
			$this->KpModel->save_kp();
            $this->session->set_flashdata('success', 'Pengajuan KP Berhasil disimpan');
			redirect('pengajuankp');
		}
	}

	public function editkp(){
		$session = $_SESSION['nim'];
		$edit = $this->KpModel->pending($session);
		$this->load->view('kp/kp_edit',['edit' => $edit]);
	}

	public function updatekp(){
			$this->KpModel->update_kp();
            $this->session->set_flashdata('success', 'Update Pengajuan KP Berhasil disimpan');
			redirect('pengajuankp');
	}

	public function cetak_pengajuankp(){
		$session = $_SESSION['nim'];
		$data = $this->KpModel->pengajuankp($session);

		$this->pdf->setPaper('A4','potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
		$this->pdf->filename = "pengajuan_kp.pdf";
		$this->pdf->load_view('kp/cetak_pengajuankp',['data' => $data]);
	}

	public function cetak_form(){
		$session = $_SESSION['nim'];
		$data = $this->KpModel->pengajuankp($session);

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
		$this->pdf->filename = "form_konsul_kp.pdf";
		$this->pdf->load_view('kp/cetak_form',['data' => $data]);
	}

	public function cetak_surat(){
		$session = $_SESSION['nim'];
		$data = $this->KpModel->pelaksanaankp($session);

		$this->pdf->setPaper('A4','portrait');
		$this->pdf->set_option('isRemoteEnabled',true);
		$this->pdf->filename = "permohonan_kp.pdf";
		$this->pdf->load_view('kp/cetak_surat',['data' => $data]);
	}

	public function cetak_lmbrtugas(){
		$session = $_SESSION['nim'];
		$data = $this->KpModel->pelaksanaankp($session);

		if($data != null){
			$this->pdf->setPaper('A4','portrait');
			$this->pdf->set_option('isRemoteEnabled',true);
			$this->pdf->filename = "lembar_tugas.pdf";
			$this->pdf->load_view('kp/cetak_lembartugas',['data' => $data]);
		}else{
			$this->load->view('kp/error_pengajuan');
		}
	}

	public function cetak_formnilai(){
		$session = $_SESSION['nim'];
		$data = $this->KpModel->pelaksanaankp($session);

		if($data != NULL){
			$this->pdf->setPaper('A4','portrait');
			$this->pdf->set_option('isRemoteEnabled',true);
			$this->pdf->filename = "form_nilai.pdf";
			$this->pdf->load_view('kp/cetak_formnilai',['data' => $data]);
		}else{
			$this->load->view('kp/error_pengajuan');
		}
	}


}