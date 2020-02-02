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
        $this->db->where('status_mhs','LULUS');
        return $this->db->get()->num_rows();
    }

    public function listkp(){
        $this->db->select('nim,nama_mhs,perusahaan_nama,perusahaan_almt');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('status_kp','SETUJU');
        $this->db->order_by('tgl_ajuan', 'DESC');
        return $this->db->get()->result();
    }

    public function listseminar(){
        $this->db->select('nim,nama_mhs,judul_seminar,nama_ruang,nama_dosen,tanggal_seminar,jam_mulai,jam_selesai');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->join('seminar_kp','kp_id = id_kp');
        $this->db->join('ref_dosen','pem_kp = id_dosen');
        $this->db->join('ref_ruang','id_ruang = ruang_id');
        $this->db->where('status_kp','SETUJU');
        $this->db->where('status_seminarkp','SETUJU');
        $this->db->order_by('tanggal_seminar', 'DESC');
        return $this->db->get()->result();
    }
    
    public function mhs($nim){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('ref_dosen','pem_akademik = id_dosen');
        $this->db->where('nim',$nim);
        return $this->db->get()->row();
    }
}