<?php
	ob_start();//Opening buffer
	
	require 'private/flight/Flight.php'; //Load framework
	require 'private/config.php'; //Load configs
	
	session_start(); //Start session
	error_reporting(Flight::get('php.error.reporting')); //set error reporting
	header('Content-Type:text/html;charset='.Flight::get('php.charset')); //set header
	date_default_timezone_set(Flight::get('php.timezone')); //set timezone
	
	function db_open() {
		if(!Flight::get('db.opened')) {
			Flight::register('db', 'SQLite3', array(Flight::get('db.path')));
			Flight::set('db.opened',true);
		}
	}
	function db_close() {
		if(Flight::get('db.opened')) Flight::db()->close();
	}
	
	foreach(glob('private/apps/*.app.php') as $file)
		require $file; //load apps
		
	Flight::start(); //run framework
	
	//close db if opened
	db_close();
	
	//End and clear buffer
	ob_end_flush();