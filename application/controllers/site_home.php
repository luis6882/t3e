<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_home extends T3E_Controller {

	public function index()
	{
		$contry = $this->input->get('contry');
		$this->session->set_userdata('contry',$contry);
		$data['title_page'] = $this->lang->line('t3r_home_home');
		
		$this->theme->view('site/site_home',$data);
		
	}
}

