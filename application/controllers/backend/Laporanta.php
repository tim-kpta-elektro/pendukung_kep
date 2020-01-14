<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Laporanta extends CI_Controller {
	
	function berita_acara(){
      $this->pdf->setPaper('A4','potrait');
      $this->pdf->set_option('isRemoteEnabled',true);
      $this->pdf->filename = "berita_acara_ta.pdf";
      $this->pdf->load_view('ta/laporan/berita_acara');

    }

    function cetak_bukti(){
      $this->pdf->setPaper('A4','potrait');
      $this->pdf->set_option('isRemoteEnabled',true);
      $this->pdf->filename = "cetak_bukti_ta.pdf";
      $this->pdf->load_view('ta/laporan/cetak_bukti');
    }

    function cetak_persetujuan(){
      $this->pdf->setPaper('A4','potrait');
      $this->pdf->set_option('isRemoteEnabled',true);
      $this->pdf->filename = "cetak_persetujuan_ta.pdf";
		  $this->pdf->load_view('ta/laporan/cetak_persetujuan');
    }

    function cetak_undangan(){
      $this->pdf->setPaper('A4','potrait');
      $this->pdf->set_option('isRemoteEnabled',true);
      $this->pdf->filename = "cetak_undangan_ta.pdf";
	  	$this->pdf->load_view('ta/laporan/cetak_undangan');
    }

    function hadir_dosen(){
      $this->pdf->setPaper('A4','potrait');
      $this->pdf->set_option('isRemoteEnabled',true);
      $this->pdf->filename = "hadir_dosen_ta.pdf";
		  $this->pdf->load_view('ta/laporan/hadir_dosen');
    }
 
}