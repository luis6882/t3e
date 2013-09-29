<?php
class theme extends CI_Model{
	public function view($page,$data = FALSE){
		$data['main_content'] = $page;
		$this->load->view('theme/theme',$data);
	}
}
?>