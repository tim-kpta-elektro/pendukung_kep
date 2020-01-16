<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth extends CI_Controller {
	
	public function __construct(){
		parent::__construct();

		$this->load->model('LoginModel');
		$this->load->library('form_validation');
	}
	
	function index(){
		if($this->session->userdata('authenticated')){ //Jika user sudah login (Session authenticated ditemukan)
			redirect('dashboard'); //Redirect ke halaman Dashboard
		}else{
			$this->load->view('login'); //Load view login
		}
	}
	
	function login(){
		$username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
	    $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
		
		$user = $this->LoginModel->get($username); // Panggil fungsi get yang ada di UserModel.php

		if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
			redirect('auth'); // Redirect ke halaman login
		}else{
			if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
			  $session = array(
				'authenticated'=>true, // Buat session authenticated dengan value true
				'username'=>$user->username,  // Buat session username
				'nim'=>$user->nim, // Buat session nim
				'level'=>$user->level //Buat session level akses
			  );
			  $this->session->set_userdata($session); // Buat session sesuai $session
			  redirect('dashboard'); // Redirect ke halaman welcome
			}else{
			  $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
			  redirect('auth'); // Redirect ke halaman login
			}
		}
	}

	public function register(){
		$login = $this->LoginModel; //Definisi login sebagai LoginModel
        $validation = $this->form_validation; //Definisi validation sebagai form_validation

        $validation->set_rules('username','Username', 'required'); //cek input dibutuhkan
        $validation->set_rules('password','Password', 'required|min_length[8]|max_length[30]');
		$validation->set_rules('nim','NIM','required|is_unique[users.nim]');
		$validation->set_rules('email','Email','required');
		$validation->set_rules('level','Level','required');

        if($this->session->userdata('authenticated')){ //Jika user sudah login (Session authenticated ditemukan)
			redirect('dashboard'); //Redirect ke halaman Dashboard
		}else if ($validation->run() == FALSE) { //Jika tidak ada data yang di inputkan load view register
            $this->load->view('register');
        }else{
			$login->regis(); //Data diinputkan maka menjalankan LoginModel
			$this->session->set_flashdata('success','User Baru Berhasil Dibuat');
            redirect('register');
            
        }

	}

	public function logout(){
		$this->session->sess_destroy(); //Hapus semua session
		redirect('auth'); //Redirect ke halaman login
	}
 
}