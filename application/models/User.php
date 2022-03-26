<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function get_login ($username,$password) {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->num_rows();
    }

}