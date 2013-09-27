<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_global extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->view('site/site_global');
	}
}

