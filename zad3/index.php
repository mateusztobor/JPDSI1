<?php
	session_start();
	ob_start();
	header('Content-Type:text/html;charset=utf-8');
	define('_INSIDE_APP', true);
	require_once dirname(__FILE__).'/config.php';
	require_once dirname(__FILE__).'/accounts.php';
	
	require_once dirname(__FILE__).'/functions.php';
	
	if(!isset($_GET['p'])) $_GET['p'] = 'start';
	
	
	if(file_exists('app/'.htmlspecialchars($_GET['p']).'.php'))
		include _ROOT_PATH.'/app/'.htmlspecialchars($_GET['p']).'.php';
	else include _ROOT_PATH.'/app/404.php';
	
	ob_end_flush();