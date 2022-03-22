<?php
	//open buffer
	ob_start();
	//load config and lang files
	require_once('./inc/core/config.class.php');
	//load config
	$config = new config;
	require_once('./inc/configs/config.php');
	//set error reporting
	error_reporting($config->get('error_reporting'));
	//set header charset
	header('Content-Type:text/html;charset='.$config->get('charset'));
	//set timezone
	date_default_timezone_set($config->get('timezone'));
	//start session
	session_start();
	//load and set smarty
	require './inc/libs/smarty/Smarty.class.php';
	$smarty = new Smarty;
	$smarty->debugging = $config->get('smarty_debugging');
	$smarty->setCacheDir($config->get('smarty_CacheDir'));
	$smarty->caching = $config->get('smarty_caching');
	$smarty->cache_lifetime = $config->get('smarty_cache_lifetime');
	$smarty->setConfigDir($config->get('smarty_ConfigDir'));
	$smarty->setTemplateDir($config->get('smarty_TemplateDir'));
	$smarty->setCompileDir($config->get('smarty_CompileDir'));
	$smarty->force_compile = $config->get('smarty_force_compile');
	
	
	
	//load language files
	$lang = new config;
	require_once('./inc/langs/'.$config->get('default_language').'.lang.php');