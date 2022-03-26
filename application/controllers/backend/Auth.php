<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		$data = $this->session->userdata('username');

		if (isset($data)) {
			redirect('backend');
		}

	}

	public function index()
	{
        $this->load->model('User');

        if (isset($_POST['submit'])) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $result = $this->User->get_login($username,$password);

            // var_dump($result);
            if ($result === 1) {

                $newdata = array(
                            'username'  => $username,
                            'password'     => $password
                            );
                    
                        $this->session->set_userdata($newdata);
                        redirect('backend/home');
            }
            
        }

		$this->load->view('backend/auth/login');
	}

    public function registrasi ()
	{
        
		$this->load->view('backend/auth/registrasi');
	}

}
