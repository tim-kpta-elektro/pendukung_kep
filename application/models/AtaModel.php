<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class AtaModel extends CI_Model {

    public function daftar_ta(){
        $this->db->select('*');
        $this->db->from('ta');
        $this->db->join('mahasiswa','ta.nim_mhs=mahasiswa.nim');
        $query=$this->db->get();
        return $query->result();
    }
}