<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_global extends T3E_Controller {

	public function index()
	{
		$this->load->model('site_global_model');
		$this->site_global_model->cookies_global();
		$data['title_page'] = $this->lang->line('t3r_int_title_page');
		//$this->session->set_userdata('contry',"Tester de informcion");
		$this->session->set_userdata('test','tester');
		$this->load->helper('cookie');
		$cookie = array(
			'name'   => 'loggedin',
		    'value'  => 'yes',
		    'expire' => '86500',
		    'domain' => '.apol0829.dev',
		    'prefix' => 'apollidon_'
		    );
		set_cookie($cookie);
		
		if(!strlen($this->session->userdata('contry'))>0){
			
			$this->theme->view('site/site_global',$data);
			
		}else {
			
			 redirect('home');
			
		}
	}
	public function set_contry () {
		$contry = $this->input->get('contry');
		$this->session->set_userdata('contry',$contry);
		//redirect(base_url().site_index);
		$this->theme->view('site/site_index');
	}
}

