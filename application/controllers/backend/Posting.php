<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting extends CI_Controller {

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
		$this->load->view('backend/posting/posting');
		$this->load->view('backend/template/footer');
	}

    public function posting_plus () {

        $this->load->view('backend/template/header');
		$this->load->view('backend/posting/posting_plus');
		$this->load->view('backend/template/footer');
    }

    public function posting_change () {

        $this->load->view('backend/template/header');
		$this->load->view('backend/posting/posting_change');
		$this->load->view('backend/template/footer');
    }

}