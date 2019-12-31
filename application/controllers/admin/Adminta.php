<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Adminta extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('AtaModel');
		$this->load->library('form_validation');
    }
    
    function index(){
		$result['daftar_ta']= $this->AtaModel->daftar_ta();
		$this->load->view('admin/daftar_ta',$result);
    }
}

