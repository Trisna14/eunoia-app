<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{

        
		$this->load->view('backend/auth/login');
	}

    public function registrasi ()
	{
        
		$this->load->view('backend/auth/registrasi');
	}

    public function coba () {

        $newdata = array(
            'username'  => 'johndoe',
            'email'     => 'johndoe@some-site.com',
            'logged_in' => TRUE
    );
    
        $this->session->set_userdata($newdata);
        redirect('backend/home');
    }

}
