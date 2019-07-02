<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poo extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		
		echo "You have arrived. bye now";


	}
}