<?php
	
	//APP
	Flight::set('app.name', 'Notuś');
	Flight::set('app.url', 'http://localhost/JPDSI1/projekt/');
	Flight::set('app.pin.length',6);
	
	//Flight
	Flight::set('flight.base_url', NULL); //Override the base url of the request. (default: null)
	Flight::set('flight.case_sensitive', false); //Case sensitive matching for URLs. (default: false)
	Flight::set('flight.handle_errors', true); //Allow Flight to handle all errors internally. (default: true)
	Flight::set('flight.log_errors', true);
	Flight::set('flight.views.path', 'private/tpl');
	Flight::set('flight.views.extension', '.tpl');
	
	//PHP
	Flight::set('php.error.reporting', E_ALL);
	Flight::set('php.timezone', 'Europe/Warsaw');
	Flight::set('php.charset', 'utf-8');
	
	//DB
	Flight::set('db.path', 'private/db.db');
	
	//Bootstrap
	Flight::set('bootstrap.path','public/bootstrap/');