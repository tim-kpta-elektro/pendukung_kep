<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model{
    
    public function listmhs(){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('ref_dosen','id_dosen = pem_akademik','left');
        return $this->db->get()->result();
    }

    public function pembimbing($id){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        //$this->db->join('ref_dosen','id_dosen = pem_akademik');
        $this->db->where('nim',$id);
        return $this->db->get()->row();
    }

    public function listdosen(){
        $this->db->select('*');
        $this->db->from('ref_dosen');
        return $this->db->get()->result();
    }

    public function updatepem(){
        $data = array(
            'pem_akademik' => $this->input->post('pem_akademik'),
        );
        
        $this->db->update('mahasiswa', $data, array('nim' => $this->input->post('nim')));
    }
}