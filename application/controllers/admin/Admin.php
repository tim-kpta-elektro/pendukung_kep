<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends MY_Controller {

    public function __construct(){
		parent::__construct();

        $this->load->model('AdminModel');
        $this->load->library('form_validation');
		if ($this->session->userdata('level') != '2') {
            redirect("dashboard");
        }
    }

    public function index(){
        $data = $this->AdminModel->listmhs();
        
        return $this->load->view('admin/list_akademik',['data' => $data]);
    }

    public function pembimbing($id = null){

        if (!isset($id)) redirect('admin/adminkp'); //redirect jika tidak ada id

        $data = $this->AdminModel->pembimbing($id); //mengambil data mahasiswa
        $lsdosen = $this->AdminModel->listdosen(); //mengambil data dosen
        if(!$data) show_404();
        
        return $this->load->view('admin/pembimbing_akademik',['data' => $data,'lsdosen' => $lsdosen]);

    }

    public function updatepem(){
        $validation = $this->form_validation;
        $validation->set_rules('pem_akademik','Pembimbing Akademik','required');

        if ($validation->run()) {
            $this->AdminModel->updatepem();
            $this->session->set_flashdata('success', 'Update Pembimbing Berhasil disimpan');
            redirect('pembimbing');
        }
    }
}