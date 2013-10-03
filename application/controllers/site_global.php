<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_global extends T3E_Controller {

	public function index()
	{
		$this->load->model('site_global_model');
		$this->site_global_model->cookies_global();
		$data['title_page'] = $this->lang->line('t3r_int_title_page');

		if(!strlen($this->session->userdata('contry'))>0){	
			$this->theme->view('site/site_global',$data);		
		}else {
			 redirect('home');
		}
	}
}

