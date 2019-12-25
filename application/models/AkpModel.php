<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AkpModel extends CI_Model{

    public function listmhs(){
        $this->db->select('nama_mhs,nim,nama_dosen');
        $this->db->from('mahasiswa');
        $this->db->join('ref_dosen','id_dosen = pem_kp','left');
        return $this->db->get()->result();
    }

    public function pembimbing($id){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('ref_dosen','id_dosen = pem_akademik');
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
            'pem_kp' => $this->input->post('pem_kp'),
        );
        
        $this->db->update('mahasiswa', $data, array('nim' => $this->input->post('nim')));
    }

    public function kp(){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('status_kp','PENDING');
        return $this->db->get()->result();
    }

    public function getkp($id){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('status_kp','PENDING');
        $this->db->where('nim',$id);
        return $this->db->get()->row();
    }

    public function setuju(){
        $data = array(
            'status_kp' => 'SETUJU'
        );
        return $this->db->update('kp',$data,array('mahasiswa_id' => $this->input->post('mahasiswa_id')));
    }

    public function tolak(){
        $data = array(
            'status_kp' => 'TOLAK'
        );
        return $this->db->update('kp',$data,array('mahasiswa_id' => $this->input->post('mahasiswa_id')));
    }

    public function seminar(){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->join('seminar_kp','id_kp = kp_id');
        $this->db->where('status_seminarkp','PENDING');
        return $this->db->get()->result();
    }

    public function getseminar($id){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->join('seminar_kp','id_kp = kp_id');
        $this->db->join('ref_ruang','id_ruang = ruang_id');
        $this->db->where('status_seminarkp','PENDING');
        $this->db->where('nim',$id);
        return $this->db->get()->row();
    }

    public function sem_setuju(){
        $data = array(
            'status_seminarkp' => 'SETUJU'
        );
        return $this->db->update('seminar_kp',$data,array('kp_id' => $this->input->post('kp_id')));
    }

    public function sem_tolak(){
        $data = array(
            'status_seminarkp' => 'TOLAK'
        );
        return $this->db->update('seminar_kp',$data,array('kp_id' => $this->input->post('kp_id')));
    }
}