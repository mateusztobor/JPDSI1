<?php
	//System settings
	$config->set('system_timezone','Europe/Warsaw');
	$config->set('system_charset','utf-8');
	$config->set('system_error_reporting',E_ALL);
	$config->set('system_languages',array('pl'));
	$config->set('system_default_language','pl');
	$config->set('system_app_start','notes');
	$config->set('system_page_404','error_404');
	$config->set('system_page_403','error_403');
	$config->set('system_page_error_db','error_db');
	$config->set('system_url','http://localhost/JPDSI1/projekt_zaliczeniowy/');
	
	//Security
	$config->set('system_user_cookiename',md5('g#Em1&9'));
	
	//Database
	$config->set('system_db_path','./inc/db/db.db');
	
	//Notes app
	$config->set('app_notes_pin_length',6);
	
	//Bootstrap
	$config->set('bootstrap_path','inc/libs/bootstrap/');
	//Smarty
	$config->set('smarty_debugging',false);
	$config->set('smarty_CacheDir','./cache/smarty/');
	$config->set('smarty_caching',false);
	$config->set('smarty_cache_lifetime',120);
	$config->set('smarty_ConfigDir','./inc/configs/smarty/');
	$config->set('smarty_PluginsDir','./inc/smarty_plugins/');
	$config->set('smarty_TemplateDir','./inc/tpl/');
	$config->set('smarty_CompileDir','./cache/smarty_c/');
	$config->set('smarty_force_compile',false);
	
	//values, which user can use in smarty template
	$config->set('smarty_allowedConfigValues', array(
													"system_url",
													"system_charset",
													"system_timezone",
													"system_current_language",
													"bootstrap_path"
												));
												
	//values, which user can use in smarty template
	$config->set('smarty_allowedSecureValues', array(
													"user_logged",
													"user_email",
													"user_nick"
												));