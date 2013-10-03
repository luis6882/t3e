<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es_cl">
<head>
<meta http-eqwzv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->lang->line('title_page'); ?> <?php if(!$title_page==NULL) {echo " - ".$title_page; }  ?></title>
<!-- CSS -->
<?php 
	echo link_tag('css/t3e-reset.css'); 
	echo link_tag('css/jquery-ui.css'); 
	echo link_tag('css/t3e-base.css');
	echo favicon_tag('favicon.ico'); 
	
?>

<!-- JS JQUERY -->

<?php 
	echo script_tag('js/jquery/jquery-1.10.1.js'); 
	echo script_tag('js/jquery/jquery-ui.js'); 
	echo script_tag('js/jquery/jquery.mousewheel.js');
	echo script_tag('js/jquery/jquery.validationEngine.js');
	echo script_tag('js/jquery/jquery.validationEngine-es.js'); 
?>
<!-- JS API JQUERY -->


<!-- JS PROPETARIO -->
<?php 
	echo script_tag('js/t3e.utils.js'); 
?>
</head>