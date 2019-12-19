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
        $this->db->where('status_kp','SETUJU');
        return $this->db->get()->row();
    }

    public function pelaksanaankp($session){
        $this->db->select('*');
        $this->db->from('kp');
        $this->db->join('mahasiswa','mahasiswa_id = id_mahasiSwa');
        $this->db->join('ref_dosen','id_dosen = pem_kp');
        $this->db->where('nim',$session);
        $this->db->where('status_kp','SETUJU');
        return $this->db->get()->row();
    }

    public function ruang(){
        return $this->db->get('ref_ruang')->result();
    }

    public function semkp($session){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('kp','mahasiswa_id = id_mahasiswa','right');
        $this->db->where('nim',$session);
        $this->db->where('status_kp','SETUJU');
        return $this->db->get()->row();
    }

    public function pending_semkp($session){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('kp','mahasiswa_id = id_mahasiswa');
        $this->db->join('seminar_kp','kp_id = kp.id_kp');
        $this->db->join('ref_ruang','ruang_id = ref_ruang.id_ruang');
        $this->db->where('nim',$session);
        $this->db->where('status_kp','SETUJU');
        $this->db->where('status_seminarkp','PENDING');
        return $this->db->get()->row();
    }

    public function setuju_semkp($session){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('kp','mahasiswa_id = id_mahasiswa');
        $this->db->join('seminar_kp','kp_id = kp.id_kp');
        $this->db->join('ref_ruang','ruang_id = ref_ruang.id_ruang');
        $this->db->where('nim',$session);
        $this->db->where('status_kp','SETUJU');
        $this->db->where('status_seminarkp','SETUJU');
        return $this->db->get()->row();
    }

    public function tolak_semkp($session){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('kp','mahasiswa_id = id_mahasiswa');
        $this->db->join('seminar_kp','kp_id = kp.id_kp');
        $this->db->join('ref_ruang','ruang_id = ref_ruang.id_ruang');
        $this->db->where('nim',$session);
        $this->db->where('status_kp','SETUJU');
        $this->db->where('status_seminarkp','TOLAK');
        return $this->db->get()->row();
    }

    public function store_semkp(){
        date_default_timezone_set('Asia/Jakarta');

        $data = array(
            'sks' => $this->input->post('sks'),
            'ipk' => $this->input->post('ipk')
        );

        $semkp = array(
            'kp_id' => $this->input->post('kp_id'),
            'judul_seminar' => $this->input->post('judul_seminar'),
            'tanggal_seminar' => $this->input->post('tanggal_seminar'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'ruang_id' => $this->input->post('ruang_id'),
            'status_seminarkp' => $this->input->post('status_seminarkp'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );

        $this->db->insert('seminar_kp',$semkp);
        $this->db->update('mahasiswa',$data,array('nim' => $this->input->post('nim')));
    }

    public function undangan($session){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('kp','mahasiswa_id = id_mahasiswa');
        $this->db->join('seminar_kp','kp_id = kp.id_kp');
        $this->db->join('ref_ruang','ruang_id = ref_ruang.id_ruang');
        $this->db->join('ref_dosen','id_dosen = pem_kp');
        $this->db->where('nim',$session);
        $this->db->where('status_kp','SETUJU');
        $this->db->where('status_seminarkp','SETUJU');
        return $this->db->get()->row();
    }


}