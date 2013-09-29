<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_index extends T3E_Controller {

	public function index()
	{
		$This->load->helper ('form');
		$this->load->view('site/site_index');
	}
}

