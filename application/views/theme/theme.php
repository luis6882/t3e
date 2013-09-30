<?php
$this->load->view('theme/head');
$this->load->view('theme/header');
?>
<!--Inicio Contenido -->
<section>
	<div id="t3e-content">
		<!-- Main content area --> 
			<?php $this->load->view($main_content); ?>
	</div>
</section>
<!--Fin Contenido -->
<?php
$this->load->view('theme/footer');
?>
