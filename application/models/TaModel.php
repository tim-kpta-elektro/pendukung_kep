<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class TaModel extends CI_Model {
    
    public function mahasiswa($session){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('nim',$session);
        return $this->db->get()->row();
    }

    public function dosens(){
        $this->db->select('*');
        $this->db->from('ref_dosen');
        $this->db->where('status_dosen','AKTIF');
        $query=$this->db->get();
        return $query->result();
    }

    public function ta($session){
        $this->db->select('*');
        $this->db->from('ta');
        $this->db->where('nim_mhs',$session);
        return $this->db->get()->row();
    }

    public function pembimbing1($id_ta){
        $this->db->select('*');
        $this->db->from('pembimbing');
        $this->db->join('ref_dosen','pembimbing.pembimbing1=ref_dosen.id_dosen');
        $this->db->join('ta','pembimbing.id_ta=ta.id_ta');
        $this->db->where('ta.id_ta',$id_ta);
        return $this->db->get()->row();
    }

    public function pembimbing2($id_ta){
        $this->db->select('*');
        $this->db->from('pembimbing');
        $this->db->join('ref_dosen','pembimbing.pembimbing2=ref_dosen.id_dosen');
        $this->db->join('ta','pembimbing.id_ta=ta.id_ta');
        $this->db->where('ta.id_ta',$id_ta);
        return $this->db->get()->row();
    }

    public function matkul($id_ta){
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('ta','matkul.id_ta=ta.id_ta');
        $this->db->where('ta.id_ta',$id_ta);
        $query=$this->db->get();
        return $query->result();
    }


    public function save_ta(){
        $data = array(
            'nim_mhs' => $this->input->post('nim'),
            'judul' => $this->input->post('judul'),
            'abstrak' => $this->input->post('abstrak'),
            'tgl_pengajuan' => $this->input->post('tgl_pengajuan'),
            'status_ta' => $this->input->post('status_ta'),
            // 'kode_peminatan' => $this->input->post('kode_peminatan'),
        );


        $ta     =$this->db->insert('ta',$data);
        $id_ta  = $this->db->insert_id();

        if($ta){
            $mhs = array(
                'sks' => $this->input->post('sks'),
                'ipk' => $this->input->post('ipk')
            );
            $this->db->update('mahasiswa',$mhs,array('nim' => $this->input->post('nim')));

            $pembimbing = array(
                'pembimbing1'   => $this->input->post('pembimbing1'),
                'pembimbing2'   => $this->input->post('pembimbing2'),
                'id_ta'         => $id_ta,
            );
            $this->db->insert('pembimbing',$pembimbing);

            for ($i = 1; $i <= 3; $i++) {
                $matkul = array(
                    'id_ta'         => $id_ta,
                    'nama_matkul'   => $this->input->post('mk'.$i),
                    'kode_matkul'   => $this->input->post('kode_mk'.$i),
                    'ip'            => $this->input->post('nilai_mk'.$i),
                    'huruf'         => $this->input->post('huruf_mk'.$i),
                );
                $this->db->insert('matkul',$matkul);
            }
        }
    }

    public function update_ta(){
        $data = array(
            'nim_mhs' => $this->input->post('nim'),
            'judul' => $this->input->post('judul'),
            'abstrak' => $this->input->post('abstrak'),
            'tgl_pengajuan' => $this->input->post('tgl_pengajuan'),
            'status_ta' => $this->input->post('status_ta'),
            // 'kode_peminatan' => $this->input->post('kode_peminatan'),
        );

        $id_ta  = $this->db->post('id_ta');
        $ta     =$this->db->update('ta',$data);

        if($ta){
            $mhs = array(
                'sks' => $this->input->post('sks'),
                'ipk' => $this->input->post('ipk')
            );
            $this->db->update('mahasiswa',$mhs,array('nim' => $this->input->post('nim')));

            $pembimbing = array(
                'pembimbing1'   => $this->input->post('pembimbing1'),
                'pembimbing2'   => $this->input->post('pembimbing2'),
                'id_ta'         => $id_ta,
            );
            $this->db->insert('pembimbing',$pembimbing);

            for ($i = 1; $i <= 3; $i++) {
                $matkul = array(
                    'id_ta'         => $id_ta,
                    'nama_matkul'   => $this->input->post('mk'.$i),
                    'kode_matkul'   => $this->input->post('kode_mk'.$i),
                    'ip'            => $this->input->post('nilai_mk'.$i),
                    'huruf'         => $this->input->post('huruf_mk'.$i),
                );
                $this->db->insert('matkul',$matkul);
            }
        }
    }

    public function get_ta(){
        $this->db->select('*');
        $this->db->from('ta');
        $query=$this->db->get();
        return $query->result();
    }

}