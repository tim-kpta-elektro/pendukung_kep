<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KpModel extends CI_Model{

    public function mahasiswa($session){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('ref_dosen','id_dosen = pem_kp');
        $this->db->where('nim',$session);
        return $this->db->get()->row();
    }

    public function pending($session){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('nim',$session);
        $this->db->where('status_kp','PENDING');
        return $this->db->get()->row();
    }

    public function setuju($session){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('nim',$session);
        $this->db->where('status_kp','SETUJU');
        return $this->db->get()->row();
    }

    public function tolak($session){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','id_mahasiswa = mahasiswa_id');
        $this->db->where('nim',$session);
        $this->db->where('status_kp','TOLAK');
        return $this->db->get()->row();
    }

    public function save_kp(){
        date_default_timezone_set('Asia/Jakarta');

        $data = array(
            'mahasiswa_id' => $this->input->post('mahasiswa_id'),
            'tgl_ajuan' => date('Y-m-d H:i:s'),
            'perusahaan_nama' => $this->input->post('perusahaan_nama'),
            'perusahaan_almt' => $this->input->post('perusahaan_almt'),
            'perusahaan_jenis' => $this->input->post('perusahaan_jenis'),
            'pic' => $this->input->post('pic'),
            'tgl_mulai_kp' => $this->input->post('tgl_mulai_kp'),
            'tgl_selesai_kp' => $this->input->post('tgl_selesai_kp'),
            'status_kp' => $this->input->post('status_kp')
        );

        $mhs = array(
            'sks' => $this->input->post('sks'),
            'ipk' => $this->input->post('ipk')
        );

        $this->db->insert('kp',$data);
        $this->db->update('mahasiswa',$mhs,array('nim' => $this->input->post('nim')));
    }

    public function pengajuankp($session){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','mahasiswa_id = id_mahasiswa');
        $this->db->join('ref_dosen','id_dosen = pem_kp');
        $this->db->where('nim',$session);
        return $this->db->get()->row();
    }

    public function pelaksanaankp($session){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','mahasiswa_id = id_mahasiwa');
    }


}