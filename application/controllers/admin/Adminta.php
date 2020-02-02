<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Adminta extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('AtaModel');
		$this->load->library('form_validation');
    }
    
    function index(){
		$result['daftar_ta']= $this->AtaModel->daftar_ta();
		$this->load->view('admin/ta/daftar_ta',$result);
	}
	
	function pendaftaran(){
		$result['pendaftaran'] = $this->AtaModel->pendaftaran_ta();
		$this->load->view('admin/ta/list_pendaftaran',$result);
	}

	function lihat_pendaftaran($id = null){
		if (!isset($id)) redirect('admin/adminta/pendaftaran');
		$result['data'] = $this->AtaModel->get_pendaftaran($id);
		$id_ta = $result['data']->id_ta;
		$result['matkul'] = $this->AtaModel->matkul($id_ta);
		$result['pembimbing1'] = $this->AtaModel->pembimbing1($id_ta);
		$result['pembimbing2'] = $this->AtaModel->pembimbing2($id_ta);
		if(!$result) show_404();
		//var_dump($result);
		$this->load->view('admin/ta/View_pendaftaran',$result);
	}

	function update_pendaftaran(){
		$validation = $this->form_validation;
        $validation->set_rules('status_ta', 'Status TA', 'required');
        if ($validation->run() == true) {
            $this->AtaModel->update_pendaftaran();
            redirect('admin/adminta/pendaftaran');
        } else {
            redirect('admin/adminta/pendaftaran');
        }
	}

	function surattugas(){
		$result['data'] = $this->AtaModel->surat_tugas();
		$this->load->view('admin/ta/list_surattugas',$result);
	}

	function cetak_surattugas($id = null){
		if (!isset($id)) redirect('admin/adminta/surattugas'); //redirect jika tidak ada id
		$result['data'] = $this->AtaModel->get_pendaftaran($id);
		$id_ta = $result['data']->id_ta;
		$result['matkul'] = $this->AtaModel->matkul($id_ta);
		$result['pembimbing1'] = $this->AtaModel->pembimbing1($id_ta);
		$result['pembimbing2'] = $this->AtaModel->pembimbing2($id_ta);
		if(!$result) show_404();
		//var_dump($result);
		$this->pdf->setPaper('A4','potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
		$this->pdf->filename = "surat_tugas.pdf";
		$this->pdf->load_view('admin/ta/cetak_surattugas',$result);

	}
}

