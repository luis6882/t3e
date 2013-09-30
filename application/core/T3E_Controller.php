<?php 

class T3E_Controller extends CI_Controller {
		
	public function T3E_Controller() {
		parent::__construct();
		$this->load->database();
		$data['title_page'] = '';
		$this->load->model('theme');
		
	}	

	public function index()
	{

	}
}

