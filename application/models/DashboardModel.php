<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashboardModel extends CI_Model{

    public function jummhs(){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        return $this->db->get()->num_rows();
    }

    public function mhsaktif(){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('status_mhs','AKTIF');
        return $this->db->get()->num_rows();
    }

    public function alumni(){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('status_mhs','ALUMNI');
        return $this->db->get()->num_rows();
    }
}