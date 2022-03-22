<?php

	require_once('./inc/core/init.php');
	echo $config->get('url');
	
	//print_r ($config->load());
	
	
	ob_end_flush();
?>