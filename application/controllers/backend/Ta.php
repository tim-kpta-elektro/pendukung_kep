<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ta extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('TaModel');
		$this->load->library('form_validation');
	}

	function index(){
		$session = $_SESSION['nim'];
		$result['data']= $this->TaModel->mahasiswa($session);
		$result['dosens']= $this->TaModel->dosens();
		$result["pending"] = $this->TaModel->pending($session);
		$result["setuju"] = $this->TaModel->setuju($session);
		$result["tolak"] = $this->TaModel->tolak($session);

		if($result["setuju"] != NULL){
			$result['ta']= $this->TaModel->ta($session);
			$id_ta=$result['ta']->id_ta;
			$result['pembimbing1']= $this->TaModel->pembimbing1($id_ta);
			$result['pembimbing2']= $this->TaModel->pembimbing2($id_ta);
			$result['matkul']= $this->TaModel->matkul($id_ta);
	
			$this->load->view('ta/pengajuan_setuju',$result);
			// redirect('backend/ta/pengajuan_setuju');
		}else if($result["pending"] != NULL){
			$result['ta']= $this->TaModel->ta($session);
			$id_ta=$result['ta']->id_ta;
			$result['pembimbing1']= $this->TaModel->pembimbing1($id_ta);
			$result['pembimbing2']= $this->TaModel->pembimbing2($id_ta);
			$result['matkul']= $this->TaModel->matkul($id_ta);
	
			$this->load->view('ta/pengajuan_pending',$result);
			
			// redirect('backend/ta/pengajuan_pending');
		}elseif($result["tolak"] != NULL){
			$session = $_SESSION['nim'];
			$result['data']= $this->TaModel->mahasiswa($session);
			$result['ta']= $this->TaModel->ta($session);
			$id_ta=$result['ta']->id_ta;
			$result['pembimbing1']= $this->TaModel->pembimbing1($id_ta);
			$result['pembimbing2']= $this->TaModel->pembimbing2($id_ta);
			$result['matkul']= $this->TaModel->matkul($id_ta);
			$result['dosens']= $this->TaModel->dosens();
			
			$this->load->view('ta/pengajuan_tolak',$result);
			// redirect('backend/ta/pengajuan_tolak');
		}else if($result != NULL){
			$this->load->view('ta/pengajuan',$result);
		}else{
			$this->load->view('kp/error_pem');
		}
	}
	
	function pengajuan(){
		$validation = $this->form_validation;
		$validation->set_rules('judul','Judul','required');
		if($validation->run() == TRUE){
			$this->TaModel->save_ta();
			redirect('backend/ta');
		}else{
			redirect('backend/ta');
		}
	}

	function pengajuan_kembali(){
		$validation = $this->form_validation;
		$validation->set_rules('judul','Judul','required');
		if($validation->run() == TRUE){
			$this->TaModel->update_ta();
			redirect('backend/ta');
		}else{
			redirect('backend/ta');
		}
	}
	
	function pengajuan_pending(){
		$session = $_SESSION['nim'];
		$result['data']= $this->TaModel->mahasiswa($session);
		$result['ta']= $this->TaModel->ta($session);
		$id_ta=$result['ta']->id_ta;
		$result['pembimbing1']= $this->TaModel->pembimbing1($id_ta);
		$result['pembimbing2']= $this->TaModel->pembimbing2($id_ta);
		$result['matkul']= $this->TaModel->matkul($id_ta);

		$this->load->view('ta/pengajuan_pending',$result);
	}

	function pengajuan_tolak(){
		$session = $_SESSION['nim'];
		$result['data']= $this->TaModel->mahasiswa($session);
		$result['ta']= $this->TaModel->ta($session);
		$id_ta=$result['ta']->id_ta;
		$result['pembimbing1']= $this->TaModel->pembimbing1($id_ta);
		$result['pembimbing2']= $this->TaModel->pembimbing2($id_ta);
		$result['matkul']= $this->TaModel->matkul($id_ta);
		$result['dosens']= $this->TaModel->dosens();
		$this->load->view('ta/pengajuan_tolak',$result);
	}

	function pengajuan_setuju(){
		$session = $_SESSION['nim'];
		$result['data']= $this->TaModel->mahasiswa($session);
		$result['ta']= $this->TaModel->ta($session);
		$id_ta=$result['ta']->id_ta;
		$result['pembimbing1']= $this->TaModel->pembimbing1($id_ta);
		$result['pembimbing2']= $this->TaModel->pembimbing2($id_ta);
		$result['matkul']= $this->TaModel->matkul($id_ta);

		$this->load->view('ta/pengajuan_setuju',$result);
	}
 
}