<?php
class theme extends CI_Model{
	public function view($page,$data = FALSE){
		if($data==FALSE){
			$data['title_page'] = '';
		}
		$data['main_content'] = $page;
		$this->load->view('theme/theme',$data);
	}
}
?>