<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function dashboard(){
		$this->load->view('dashboard');
	}
 
}