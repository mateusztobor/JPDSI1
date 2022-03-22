<?php
	//System settings
	$config->set('timezone','Europe/Warsaw');
	$config->set('charset','utf-8');
	$config->set('error_reporting',E_ALL);
	$config->set('languages',array('pl'));
	$config->set('default_language','pl');
	$config->set('url','http://localhost/JPDSI1/projekt_zaliczeniowy/');
	//Security
	$config->set('pass_hashsecurity','g#Em1&9');
	$config->set('sess_hashsecurity','hu%5@.pro');
	//Database
	$config->set('db_users','./inc/db/users.db');
	$config->set('db_posts','.inc/db/posts.db');
	//Smarty
	$config->set('smarty_debugging',false);
	$config->set('smarty_CacheDir','./cache/smarty/');
	$config->set('smarty_caching',false);
	$config->set('smarty_cache_lifetime',120);
	$config->set('smarty_ConfigDir','./inc/configs/smarty/');
	$config->set('smarty_TemplateDir','./inc/tpl/');
	$config->set('smarty_CompileDir','./cache/smarty_c/');
	$config->set('smarty_force_compile',false);
	