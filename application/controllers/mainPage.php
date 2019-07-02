<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {

	public function index()
	{
		$this->load->database();
		
		$this->load->model('User_model');

		$this->load->view('header');

		$this->load->view('home');

		$this->load->view('footer');
		

	}
}