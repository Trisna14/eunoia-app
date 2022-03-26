<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		$data = $this->session->userdata('username');

		if (!isset($data)) {
			redirect('backend/auth');
		}

	}

    public function index () {

		$this->load->view('backend/template/header');
		$this->load->view('backend/database/database');
		$this->load->view('backend/template/footer');
	}

}