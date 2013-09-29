<?php 

class T3E_Controller extends CI_Controller {
		
	public function T3E_Controller() {
		parent::__construct();
		$this->load->database();
		$this->load->model('theme');
	}	

	public function index()
	{

	}
}

