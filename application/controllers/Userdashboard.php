<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('userdashboard/header');
		$this->load->view('userdashboard/dashboard');
		$this->load->view('userdashboard/footer');
	}
}