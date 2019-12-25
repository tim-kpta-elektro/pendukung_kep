<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('DashboardModel');
	}

    public function index(){
		$jumlahmhs = $this->DashboardModel->jummhs();
		$mhsaktif = $this->DashboardModel->mhsaktif();
		$alumni = $this->DashboardModel->alumni();
		$listkp = $this->DashboardModel->listkp();
		$listseminar = $this->DashboardModel->listseminar();

		$this->load->view('dashboard',['jumlahmhs' => $jumlahmhs,'mhsaktif' => $mhsaktif,
		'alumni' => $alumni,'listkp'=>$listkp,'listseminar'=>$listseminar]);
	}

}