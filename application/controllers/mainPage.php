<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {

	public function index()
	{
		$this->load->database();
		
		$this->load->model('User_model');

		$this->load->view('header_dependencies'); // Loads all of the needed JS Libraries and CSS files

		$this->load->view('login_header'); // Loads the login portion of the header / dynamic to detect login

		$this->load->view('header'); // Standard site header with navigation

		$this->load->view('home'); // Main content

		$this->load->view('footer'); // Standard Footer that closes all div tags and the body tag
		
	}
}