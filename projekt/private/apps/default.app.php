<?php

	Flight::route('/', function(){
		//Flight::render('head_start', array('config' => Flight::config()->get('system_timezone')));
		//echo Flight::get('php.timezone');
		//if(Flight::get('php.timezone2')) echo 'jest';
		db_open();
		
		Flight::render('head_start', array('title' => Flight::get('app.name')));
		Flight::render('head_end');
		Flight::render('header');
		Flight::render('nav');
		Flight::render('nav_guest');
		Flight::render('content_start');
		echo 'ok';
		Flight::render('content_end');
		
		Flight::render('footer');
		Flight::render('end');
	});