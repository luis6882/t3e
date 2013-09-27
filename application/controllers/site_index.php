<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_index extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->view('site/site_index');
	}
}

