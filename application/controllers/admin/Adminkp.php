<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Adminkp extends MY_Controller {

    public function __construct(){
		parent::__construct();

        $this->load->model('AkpModel');
        $this->load->library('form_validation');
		if ($this->session->userdata('level') != '3') {
            redirect("dashboard");
        }
    }
    
    public function index(){
        $data = $this->AkpModel->listmhs();
        //var_dump($data);
        return $this->load->view('admin/daftarmhs',['data' => $data]);
    }

    public function pembimbing($id = null){

        if (!isset($id)) redirect('admin/adminkp'); //redirect jika tidak ada id

        $data = $this->AkpModel->pembimbing($id); //mengambil data mahasiswa
        $lsdosen = $this->AkpModel->listdosen(); //mengambil data dosen
        if(!$data) show_404();
        
        return $this->load->view('admin/pembimbing',['data' => $data,'lsdosen' => $lsdosen]);

    }

    public function updatepem(){
        $validation = $this->form_validation;
        $validation->set_rules('pem_kp','Pembimbing KP','required');

        if ($validation->run()) {
            $this->AkpModel->updatepem();
            $this->session->set_flashdata('success', 'Update Pembimbing Berhasil disimpan');
            redirect('daftarmhs');
        }
    }

    public function pengajuankp(){
        $data = $this->AkpModel->kp();

        return $this->load->view('admin/kerjapraktek',['data'=>$data]);
    }

    public function lihatkp($id = null){
        
        if (!isset($id)) redirect('requestkp'); //redirect jika tidak ada id
        
        $data = $this->AkpModel->getkp($id);
        if(!$data) redirect('requestkp');
        
        return $this->load->view('admin/viewkp',['data'=>$data]);
    }

    public function updatekp(){
        switch ($this->input->post('action')) {
            case 'setuju':
                $this->AkpModel->setuju();
                $this->session->set_flashdata('success', 'Update Pengajuan KP Berhasil disimpan');
                return redirect('requestkp');
                break;
    
            case 'tolak':
                $this->AkpModel->tolak();
                $this->session->set_flashdata('success', 'Update Pengajuan KP Berhasil disimpan');
                return redirect('requestkp');
                break;
            }
    }

    public function seminarkp(){
        $data = $this->AkpModel->seminar();
        return $this->load->view('admin/seminarkp',['data'=>$data]);
    }

    public function lihatseminar($id){
        if (!isset($id)) redirect('seminarkp'); //redirect jika tidak ada id
        
        $data = $this->AkpModel->getseminar($id);
        if(!$data) redirect('seminarkp');
        
        return $this->load->view('admin/viewseminar',['data'=>$data]);
    }

    public function updateseminar(){
        switch ($this->input->post('action')) {
            case 'setuju':
                $this->AkpModel->sem_setuju();
                $this->session->set_flashdata('success', 'Update Pengajuan Seminar KP Berhasil disimpan');
                return redirect('seminarkp');
                break;
    
            case 'tolak':
                $this->AkpModel->sem_tolak();
                $this->session->set_flashdata('success', 'Update Pengajuan Seminar KP Berhasil disimpan');
                return redirect('seminarkp');
                break;
            }
    }


}