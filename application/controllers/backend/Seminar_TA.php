<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Seminar_TA extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('SemTaModel');
		$this->load->model('TaModel');
		$this->load->model('KpModel');
		$this->load->library('form_validation');
	}

	function index(){
		$session = $_SESSION['nim'];
		$result['ta_setuju']= $this->SemTaModel->ta_setuju($session);
		$id_ta=$result['ta_setuju']->id_ta;

		if($result['ta_setuju'] != NULL){
			$result['ruang'] = $this->KpModel->ruang();
			$result['dosens']= $this->TaModel->dosens();
			$result['data']= $this->TaModel->mahasiswa($session);
			$result['pembimbing1']= $this->TaModel->pembimbing1($id_ta);
			$result['pembimbing2']= $this->TaModel->pembimbing2($id_ta);

			$result["pending"] = $this->SemTaModel->pending($session);
			$result["tolak"] = $this->SemTaModel->tolak($session);
			$result["setuju"] = $this->SemTaModel->setuju($session);
			if($result["pending"]){
				$this->load->view('ta/seminar/pengajuan_pending',$result);
			}else if($result["tolak"]){
				$this->load->view('ta/seminar/pengajuan_tolak',$result);
			}else if($result["setuju"]){
				$this->load->view('ta/seminar/pengajuan_setuju',$result);
			}
		}else{
			$this->load->view('kp/error_pem');
		}	
	}

	function pengajuan(){
		$validation = $this->form_validation;
		$validation->set_rules('tanggal','Tanggal','required');
		if($validation->run() == TRUE){
			$this->SemTaModel->save_seminar();
			redirect('backend/seminar_ta');
		}else{
			redirect('backend/seminar_ta');
		}
	}

	function pengajuan_kembali(){
		$validation = $this->form_validation;
		$validation->set_rules('tanggal','Tanggal','required');
		if($validation->run() == TRUE){
			$this->SemTaModel->update_seminar();
			redirect('backend/seminar_ta');
		}else{
			redirect('backend/seminar_ta');
		}
	}

}