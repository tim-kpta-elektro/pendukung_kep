<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pendadaran_TA extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('PendTaModel');
		$this->load->model('TaModel');
		$this->load->model('KpModel');
		$this->load->library('form_validation');
	}

	function index(){
		$session = $_SESSION['nim'];
		$result['seminar_setuju']= $this->PendTaModel->seminar_setuju($session);

		if($result['seminar_setuju'] != NULL){
			$id_ta=$result['seminar_setuju']->id_ta;
			$result['ruang'] = $this->KpModel->ruang();
			$result['dosens']= $this->TaModel->dosens();
			$result['data']= $this->TaModel->mahasiswa($session);
			$result['pembimbing1']= $this->TaModel->pembimbing1($id_ta);
			$result['pembimbing2']= $this->TaModel->pembimbing2($id_ta);

			$result["pending"] = $this->PendTaModel->pending($session);
			$result["tolak"] = $this->PendTaModel->tolak($session);
			$result["setuju"] = $this->PendTaModel->setuju($session);
			if($result["pending"]){
				$this->load->view('ta/pendadaran/pengajuan_pending',$result);
			}else if($result["tolak"]){
				$this->load->view('ta/pendadaran/pengajuan_tolak',$result);
			}else if($result["setuju"]){
				$this->load->view('ta/pendadaran/pengajuan_setuju',$result);
			}else{
				$this->load->view('ta/pendadaran/pengajuan',$result);
			}
		}else{
			$this->load->view('ta/error/pengajuan_pendadaran');

		}	
	}

	function pengajuan(){
		$validation = $this->form_validation;
		$validation->set_rules('tanggal','Tanggal','required');
		if($validation->run() == TRUE){
			$this->PendTaModel->save_pendadaran();
			redirect('backend/pendadaran_ta');
		}else{
			redirect('backend/pendadaran_ta');
		}
	}

	function pengajuan_kembali(){
		$validation = $this->form_validation;
		$validation->set_rules('tanggal','Tanggal','required');
		if($validation->run() == TRUE){
			$this->PendTaModel->update_pendadaran();
			redirect('backend/pendadaran_ta');
		}else{
			redirect('backend/pendadaran_ta');
		}
	}

}