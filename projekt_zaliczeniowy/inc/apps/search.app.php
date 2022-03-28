<?php 
	if(isset($_GET['id']))
		header('Location: '.$this->config->get('system_url').'p/'.$_GET['id']);
	else
		$this->tpl_print_error(404);
?>
