<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct(){
		parent::__construct();

		$this->load->model('DashboardModel');
	}


	public function index()
	{
		$jumlahmhs = $this->DashboardModel->jummhs();
		$mhsaktif = $this->DashboardModel->mhsaktif();
		$alumni = $this->DashboardModel->alumni();

		if($this->session->userdata('authenticated')){ //Jika user sudah login (Session authenticated ditemukan)
			redirect('dashboard'); //Redirect ke halaman Dashboard
		}else{
			$this->load->view('guest_dashboard',['jumlahmhs' => $jumlahmhs,'mhsaktif' => $mhsaktif,
			'alumni' => $alumni]); //Load view Dashboard Guest
		}
	}

}
