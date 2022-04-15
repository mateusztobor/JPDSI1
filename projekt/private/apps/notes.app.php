<?php

	Flight::route('/'.Flight::get('app.path.notes'), function(){
		if(Flight::get('user.type') != 0) $tpl = 'notes_user';
		else $tpl = 'notes_guest';
		Flight::render('main', array('title' => Flight::get('lang.notes_title'), 'tpl'=>$tpl));
	});