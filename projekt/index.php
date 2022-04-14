<?php
	ob_start();
	require 'private/config.php';
	session_start();
	error_reporting($config['system_error_reporting']);
	header('Content-Type:text/html;charset='.$config['system_charset']);
	date_default_timezone_set($config['system_timezone']);
	
	require 'private/libs/flight/Flight.php';
	
	/*
	require 'private/libs/smarty/Smarty.class.php';
	Flight::register('tpl', 'Smarty');
	Flight::tpl()->setConfigDir($config['smarty_ConfigDir']);
	Flight::tpl()->debugging = $config['smarty_debugging'];
	Flight::tpl()->setCacheDir($config['smarty_CacheDir']);
	Flight::tpl()->caching = $config['smarty_caching'];
	Flight::tpl()->cache_lifetime = $config['smarty_cache_lifetime'];
	Flight::tpl()->setConfigDir($config['smarty_ConfigDir']);
	Flight::tpl()->setPluginsDir($config['smarty_PluginsDir']);
	Flight::tpl()->setTemplateDir($config['smarty_TemplateDir']);
	Flight::tpl()->setCompileDir($config['smarty_CompileDir']);
	Flight::tpl()->force_compile = $config['smarty_force_compile'];
	*/
	
	
	foreach(glob('private/apps/*.app.php') as $file)
		require $file;
	
	Flight::start();
	ob_end_flush();
