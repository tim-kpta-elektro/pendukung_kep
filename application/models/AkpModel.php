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

    public function waiting(){
        $data = array(
            'status_kp' => 'WAITING'
        );
        return $this->db->update('kp',$data,array('id_kp' => $this->input->post('id_kp')));
    }

    public function tolak(){
        $data = array(
            'status_kp' => 'TOLAK'
        );
        return $this->db->update('kp',$data,array('id_kp' => $this->input->post('id_kp')));
    }

    public function balaskp(){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('status_kp','WAITING');
        return $this->db->get()->result();
    }

    public function getbalaskp($id){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('status_kp','WAITING');
        $this->db->where('nim',$id);
        return $this->db->get()->row();
    }

    public function bkp(){
        $data = array(
            'status_kp' => 'SETUJU',
            'no_surat' => $this->input->post('no_surat'),
            'tanggal_surat' => $this->input->post('tanggal_surat'),
            'tgl_mulai_kp' => $this->input->post('tgl_mulai_kp'),
            'tgl_selesai_kp' => $this->input->post('tgl_selesai_kp')
        );
        return $this->db->update('kp',$data,array('id_kp' => $this->input->post('id_kp')));
    }

    public function listkp(){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('status_kp','SETUJU');
        return $this->db->get()->result();
    }

    public function getlistkp($id){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('status_kp','SETUJU');
        $this->db->where('nim',$id);
        return $this->db->get()->row();
    }

    public function lkp(){
        $data = array(
            'status_kp' => 'SETUJU',
            'no_surat' => $this->input->post('no_surat'),
            'tanggal_surat' => $this->input->post('tanggal_surat'),
            'tgl_mulai_kp' => $this->input->post('tgl_mulai_kp'),
            'tgl_selesai_kp' => $this->input->post('tgl_selesai_kp')
        );
        return $this->db->update('kp',$data,array('id_kp' => $this->input->post('id_kp')));
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