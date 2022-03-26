<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$data = $this->session->userdata('username');

		if (!isset($data)) {
			redirect('backend/auth');
		}

	}

	public function index()
	{
		
		$this->load->view('backend/template/header');
		$this->load->view('backend/home/home');
		$this->load->view('backend/template/footer');
	}

	public function comment () {

		$this->load->view('backend/template/header');
		$this->load->view('backend/comment/comment');
		$this->load->view('backend/template/footer');
	}

	public function logout () {

		$this->session->sess_destroy();

		redirect('backend/auth');
	}

}
