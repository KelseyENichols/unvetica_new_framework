<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example1 extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		echo "Body";
	}
}