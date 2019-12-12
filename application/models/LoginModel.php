<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {
    
    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('users')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }

    public function regis()
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = array(
            'nim' => $this->input->post('nim'),
            'username' => $this->input->post('username'),
            'email'=> $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );

        $this->db->insert('users', $data);
    }
}