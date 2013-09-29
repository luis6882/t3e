<?php
class Controller_model extends CI_Model{
	public function theme($page){
		$data['main_content'] = $page;
		$this->load->view('theme/theme',$data);
	}
}
?>