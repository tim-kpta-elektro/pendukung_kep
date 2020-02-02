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

    public function pendaftaran_ta(){
        $this->db->select('*','id_ta');
        $this->db->from('ta');
        $this->db->join('mahasiswa','ta.nim_mhs=mahasiswa.nim');
        $this->db->where('status_ta','PENDING');
        return $this->db->get()->result();
    }

    public function get_pendaftaran($id){
        $this->db->select('*');
        $this->db->from('ta');
        $this->db->join('mahasiswa','ta.nim_mhs = mahasiswa.nim');
        // $this->db->join('matkul','ta.id_ta = matkul.id_ta');
        $this->db->join('pembimbing','ta.id_ta = pembimbing.id_ta');
        $this->db->join('peminatan','ta.kode_peminatan = peminatan.id');
        $this->db->where('ta.id_ta',$id);
        return $this->db->get()->row();
    }

    public function matkul($id_ta){
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->where('matkul.id_ta',$id_ta);
        $query=$this->db->get();
        return $query->result();
    }

    public function pembimbing1($id_ta){
        $this->db->select('nama_dosen,nip');
        $this->db->from('pembimbing');
        $this->db->join('ref_dosen','pembimbing.pembimbing1=ref_dosen.id_dosen');
        $this->db->where('pembimbing.id_ta',$id_ta);
        return $this->db->get()->row();
    }

    public function pembimbing2($id_ta){
        $this->db->select('nama_dosen,nip');
        $this->db->from('pembimbing');
        $this->db->join('ref_dosen','pembimbing.pembimbing2=ref_dosen.id_dosen');
        $this->db->where('pembimbing.id_ta',$id_ta);
        return $this->db->get()->row();
    }

    public function surat_tugas(){
        $this->db->select('*','id_ta');
        $this->db->from('ta');
        $this->db->join('mahasiswa','ta.nim_mhs=mahasiswa.nim');
        $this->db->where('status_ta','SETUJU');
        return $this->db->get()->result();
    }

    public function update_pendaftaran(){
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'tgl_setuju' => date('Y-m-d H:i:s'),
            'status_ta' => $this->input->post('status_ta')
        );

        $id_ta  = array('id_ta'=>$this->input->post('id_ta'));

        $ta     =$this->db->update('ta',$data,$id_ta);

        if($ta){
            $pembimbing = array(
                'status_pem1'   => $this->input->post('status_pem1'),
                'status_pem2'   => $this->input->post('status_pem2'),
            );
            $this->db->update('pembimbing',$pembimbing,$id_ta);
        }
    }

}