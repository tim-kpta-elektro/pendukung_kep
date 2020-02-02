<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class TaModel extends CI_Model {
    
    public function mahasiswa($session){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('nim',$session);
        return $this->db->get()->row();
    }

    public function pending($session){
        $this->db->select('*');
        $this->db->from('ta');
        $this->db->join('mahasiswa','ta.nim_mhs = mahasiswa.nim');
        $this->db->where('nim',$session);
        $this->db->where('status_ta','PENDING');
        return $this->db->get()->row();
    }

    public function tolak($session){
        $this->db->select('*');
        $this->db->from('ta');
        $this->db->join('mahasiswa','ta.nim_mhs = mahasiswa.nim');
        $this->db->where('nim',$session);
        $this->db->where('status_ta','TOLAK');
        return $this->db->get()->row();
    }

    public function setuju($session){
        $this->db->select('*');
        $this->db->from('ta');
        $this->db->join('mahasiswa','ta.nim_mhs = mahasiswa.nim');
        $this->db->where('nim',$session);
        $this->db->where('status_ta','SETUJU');
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

    public function peminatan($id_ta){
        $this->db->select('*');
        $this->db->from('peminatan');
        $this->db->join('ta','peminatan.id=ta.kode_peminatan');
        $this->db->where('ta.id_ta',$id_ta);
        $query=$this->db->get();
        return $query->row();
    }


    public function save_ta(){
        date_default_timezone_set('Asia/Jakarta');

        $data = array(
            'nim_mhs' => $this->input->post('nim'),
            'judul' => $this->input->post('judul'),
            'abstrak' => $this->input->post('abstrak'),
            'tgl_pengajuan' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status_ta' => $this->input->post('status_ta'),
            'kode_peminatan' => $this->input->post('kode_peminatan'),
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

            for ($i = 0; $i <= 2; $i++) {
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
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'nim_mhs' => $this->input->post('nim'),
            'judul' => $this->input->post('judul'),
            'abstrak' => $this->input->post('abstrak'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status_ta' => $this->input->post('status_ta'),
            'kode_peminatan' => $this->input->post('kode_peminatan'),
        );

        $id_ta  = array('id_ta'=>$this->input->post('id_ta'));

        $ta     =$this->db->update('ta',$data,$id_ta);

        if($ta){
            $mhs = array(
                'sks' => $this->input->post('sks'),
                'ipk' => $this->input->post('ipk')
            );
            $this->db->update('mahasiswa',$mhs,array('nim' => $this->input->post('nim')));

            $pembimbing = array(
                'pembimbing1'   => $this->input->post('pembimbing1'),
                'pembimbing2'   => $this->input->post('pembimbing2'),
            );
            $this->db->update('pembimbing',$pembimbing,$id_ta);

            //Update Matkul perlu diperbaiki
            for ($i = 0; $i <= 2; $i++) {
                $matkul = array(
                    'nama_matkul'   => $this->input->post('mk'.$i),
                    'kode_matkul'   => $this->input->post('kode_mk'.$i),
                    'ip'            => $this->input->post('nilai_mk'.$i),
                    'huruf'         => $this->input->post('huruf_mk'.$i),
                );
                $this->db->update('matkul',$matkul,array('id'=>$this->input->post('id'.$i)));
            }
        }
    }

    public function get_ta(){
        $this->db->select('*');
        $this->db->from('ta');
        $query=$this->db->get();
        return $query->result();
    }

    public function matakuliah(){
        $this->db->select('*');
        $this->db->from('ref_mata_kuliah');
        $this->db->order_by('nama', 'ASC');
        return $this->db->get()->result();
    }

    public function get_peminatan(){
        $this->db->select('*');
        $this->db->from('peminatan');
        return $this->db->get()->result();
    }
    public function get_matakuliah($nama){
        $this->db->select('*');
        $this->db->from('ref_mata_kuliah');
        $this->db->order_by('nama', 'ASC');
        $this->db->where('nama',$nama);
        return $this->db->get()->result();
    }

}