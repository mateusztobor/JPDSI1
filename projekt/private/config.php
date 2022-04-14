<?php
	//System settings
	$config['system_timezone'] = 'Europe/Warsaw';
	$config['system_charset'] = 'utf-8';
	$config['system_error_reporting'] = E_ALL;
	$config['system_language'] = 'pl';
	$config['system_app_start'] = 'notes';
	$config['system_page_404'] = 'error_404';
	$config['system_page_403'] = 'error_403';
	$config['system_page_error_db'] = 'error_db';
	$config['system_url'] = 'http://localhost/JPDSI1/projekt_zaliczeniowy/';
	
	//Security
	$config['system_user_cookiename'] = md5('g#Em1&9');
	
	//Database
	$config['system_db_path'] = './inc/db/db.db';
	
	//Notes app
	$config['notes_pin_length'] = 6;
	
	//Bootstrap
	$config['bootstrap_path'] = 'inc/libs/bootstrap/';
	//Smarty
	$config['smarty_debugging'] = false;
	$config['smarty_CacheDir'] = './cache/smarty/';
	$config['smarty_caching'] = false;
	$config['smarty_cache_lifetime'] = 120;
	$config['smarty_ConfigDir'] = './inc/configs/smarty/';
	$config['smarty_PluginsDir'] = './inc/smarty_plugins/';
	$config['smarty_TemplateDir'] = './inc/tpl/';
	$config['smarty_CompileDir'] = './cache/smarty_c/';
	$config['smarty_force_compile'] = false;
	
	//values, which user can use in smarty template
	$config['smarty_allowedConfigValues'] =  array(
													"system_url",
													"system_charset",
													"system_timezone",
													"system_current_language",
													"bootstrap_path"
												);
												
	//values, which user can use in smarty template
	$config['smarty_allowedSecureValues'] =  array(
													"user_logged",
													"user_email",
													"user_nick"
												);