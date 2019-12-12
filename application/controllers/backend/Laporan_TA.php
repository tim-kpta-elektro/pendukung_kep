<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Laporan_Ta extends CI_Controller {
	
	function berita_acara(){
		$this->load->view('ta/laporan/berita_acara');
    }

    function cetak_bukti(){
		$this->load->view('ta/laporan/cetak_bukti');
    }

    function cetak_persetujuan(){
		$this->load->view('ta/laporan/cetak_persetujuan');
    }

    function cetak_undangan(){
		$this->load->view('ta/laporan/cetak_undangan');
    }

    function hadir_dosen(){
		$this->load->view('ta/laporan/hadir_dosen');
    }
 
}