<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_global extends T3E_Controller {

	public function index()
	{
		$this->load->model('site_global_model');
		$this->site_global_model->cookies_global();
		$data['Prueba'] = 'texto de prueba';
		$this->theme->view('site/site_global',$data);
	}
}

