<?php
	if(Flight::get('user.type') != 0) {
		Flight::route('/'.Flight::get('app.path.account'), function(){
			Flight::render('main', array('title' => Flight::get('lang.user_settings_title'), 'tpl'=>'account'));
			//echo 'will be';
			//Flight::destroy_session();
		});
	}