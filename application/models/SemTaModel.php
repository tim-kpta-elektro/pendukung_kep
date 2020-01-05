<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class SemTaModel extends CI_Model {

    public function mahasiswa($session){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('nim',$session);
        return $this->db->get()->row();
    }

    public function ta_setuju($session){
        $this->db->select('*');
        $this->db->from('ta');
        $this->db->where('nim_mhs',$session);
        $this->db->where('status_TA','SETUJU');
        return $this->db->get()->row();
    }

    public function save_seminar(){
        $data = array(
            'id_ta' => $this->input->post('id_ta'),
            'tanggal' => $this->input->post('tanggal'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'tempat' => $this->input->post('tempat'),
            'status_seminar' => $this->input->post('status_seminar'),
        );
        $seminar     =$this->db->insert('seminar_ta',$data);

        if($seminar){
            $mhs = array(
                'sks' => $this->input->post('sks'),
                'ipk' => $this->input->post('ipk')
            );
            $this->db->update('mahasiswa',$mhs,array('nim' => $this->input->post('nim')));
        }
    }

    public function update_seminar(){
        $data = array(
            'id_ta' => $this->input->post('id_ta'),
            'tanggal' => $this->input->post('tanggal'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'jam_selesai' => $this->input->post('jam_selesai'),
            'tempat' => $this->input->post('tempat'),
            'status_seminar' => $this->input->post('status_seminar'),
        );
        $seminar     =$this->db->update('seminar_ta',$data,array('id_ta' => $this->input->post('id_ta')));

        if($seminar){
            $mhs = array(
                'sks' => $this->input->post('sks'),
                'ipk' => $this->input->post('ipk')
            );
            $this->db->update('mahasiswa',$mhs,array('nim' => $this->input->post('nim')));
        }
    }

    public function pending($session){
        $this->db->select('*');
        $this->db->from('seminar_ta');
        $this->db->join('ta','seminar_ta.id_ta = ta.id_ta');
        $this->db->join('ref_ruang','seminar_ta.tempat = ref_ruang.id_ruang');
        $this->db->where('ta.nim_mhs',$session);
        $this->db->where('status_seminar','PENDING');
        return $this->db->get()->row();
    }

    public function tolak($session){
        $this->db->select('*');
        $this->db->from('seminar_ta');
        $this->db->join('ta','seminar_ta.id_ta = ta.id_ta');
        $this->db->join('ref_ruang','seminar_ta.tempat = ref_ruang.id_ruang');
        $this->db->where('ta.nim_mhs',$session);
        $this->db->where('status_seminar','TOLAK');
        return $this->db->get()->row();
    }

    public function setuju($session){
        $this->db->select('*');
        $this->db->from('seminar_ta');
        $this->db->join('ta','seminar_ta.id_ta = ta.id_ta');
        $this->db->join('ref_ruang','seminar_ta.tempat = ref_ruang.id_ruang');
        $this->db->where('ta.nim_mhs',$session);
        $this->db->where('status_seminar','SETUJU');
        return $this->db->get()->row();
    }


}