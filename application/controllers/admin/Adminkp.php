<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Adminkp extends MY_Controller {

    public function __construct(){
		parent::__construct();

        $this->load->model('AkpModel');
        $this->load->model('KpModel');
        $this->load->library('form_validation');
		if ($this->session->userdata('level') != '3') {
            redirect("dashboard");
        }
    }
    
    public function index(){
        $data = $this->AkpModel->listmhs();
        //var_dump($data);
        return $this->load->view('admin/kp/list_mhs',['data' => $data]);
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

        return $this->load->view('admin/kp/list_pengajuan',['data'=>$data]);
    }

    public function lihat_pengajuankp($id = null){
        
        if (!isset($id)) redirect('pengajuan'); //redirect jika tidak ada id
        
        $data = $this->AkpModel->getkp($id);
        if(!$data) redirect('pengajuan');
        
        return $this->load->view('admin/kp/view_pengajuan',['data'=>$data]);
    }

    public function update_pengajuankp(){
        switch ($this->input->post('action')) {
            case 'setuju':
                $this->AkpModel->waiting();
                $this->session->set_flashdata('success', 'Update Pengajuan KP Berhasil disimpan');
                return redirect('pengajuan');
                break;
    
            case 'tolak':
                $this->AkpModel->tolak();
                $this->session->set_flashdata('success', 'Update Pengajuan KP Berhasil disimpan');
                return redirect('pengajuan');
                break;
            }
    }

    public function permohonankp(){
        $data = $this->AkpModel->permohonankp();
        return $this->load->view('admin/kp/list_permohonan',['data' => $data]);
    }

    public function balasankp(){
        $data = $this->AkpModel->balasankp();
        return $this->load->view('admin/kp/list_balasan',['data' => $data]);
    }

    public function lihatbalaskp($id = null){
        if (!isset($id)) redirect('balasankp'); //redirect jika tidak ada id
        
        $data = $this->AkpModel->getbalasankp($id);
        if(!$data) redirect('balasankp');
        
        return $this->load->view('admin/kp/view_balasan',['data'=>$data]);
    }

    public function filekp($file = null){
        //$data = $this->AkpModel->doc();
        //var_dump($data);
        if (!isset($file)){
            redirect('penugasankp');
        }else{
            //if($data != null ){
                redirect(base_url('upload/balasankp/'.$file));
            // }else{
            //     return $this->load->view('kp/error_pem');
            // }
        } 
    }

    public function penugasankp(){
        $data =$this->AkpModel->penugasankp();
        return $this->load->view('admin/kp/list_penugasan',['data' => $data]);
    }

    public function lihat_penugasankp($id = null){
        if (!isset($id)) redirect('penugasankp'); //redirect jika tidak ada id
        
        $data = $this->AkpModel->getpenugasankp($id);
        if(!$data) redirect('penugasankp');
        
        return $this->load->view('admin/kp/view_penugasan',['data'=>$data]);
    }

    public function update_penugasankp(){
        switch ($this->input->post('action')) {
            case 'setuju':
                $this->AkpModel->pkp();
                $this->session->set_flashdata('success', 'Update Permohonan KP Berhasil disimpan');
                return redirect('penugasankp');
                break;
    
            case 'tolak':
                $this->AkpModel->tolak();
                $this->session->set_flashdata('success', 'Update Permohonan KP Berhasil disimpan');
                return redirect('penugasankp');
                break;
            }
    }

    public function updatelistkp(){
        $this->AkpModel->lkp();
        $this->session->set_flashdata('success', 'Update Kerja Praktek Berhasil disimpan');
        return redirect('listkp');
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

    public function cetak_pengajuankp($nim){
		//$session = $nim;
		$data = $this->AkpModel->cetak_pengajuankp($nim);
		$this->pdf->setPaper('A4','potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
		$this->pdf->filename = "pengajuan_kp.pdf";
		$this->pdf->load_view('admin/kp/cetak_pengajuankp',['data' => $data]);
    }
    
    public function cetak_permohonankp($nim){
        //$data = $nim;
        //var_dump($data);
        $data = $this->AkpModel->cetak_permohonan($nim);

		$this->pdf->setPaper('A4','potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
        $this->pdf->filename = "pengajuan_kp.pdf";
        $this->pdf->load_view('admin/kp/cetak_permohonan',['data' => $data]);
		//$this->pdf->load_view('kp/cetak_permohonankp');
    }

    public function cetak_penugasankp($nim){
        //$data = $nim;
        //var_dump($data);
        $data = $this->AkpModel->cetak_penugasan($nim);

		$this->pdf->setPaper('A4','potrait');
		$this->pdf->set_option('isRemoteEnabled',true);
        $this->pdf->filename = "pengajuan_kp.pdf";
        $this->pdf->load_view('admin/kp/cetak_penugasan',['data' => $data]);
		//$this->pdf->load_view('kp/cetak_permohonankp');
    }


}