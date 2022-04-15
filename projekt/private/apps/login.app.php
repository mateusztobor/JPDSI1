<?php
	if(Flight::get('user.type') == 0) {
		Flight::map('login_form', function(){
			$err=false;
			if(isset($_POST['post_email']) && isset($_POST['post_password'])) {
				Flight::db_open();
				$count = Flight::db()->querySingle('SELECT COUNT(*) as count FROM users WHERE email="'.$_POST['post_email'].'";');
				if($count == 1) {
					$pass = Flight::db()->querySingle('SELECT password FROM users WHERE email="'.$_POST['post_email'].'";');
					if(password_verify($_POST['post_password'], $pass)) {
						$uid = Flight::db()->querySingle('SELECT id FROM users WHERE email="'.$_POST['post_email'].'";');
						Flight::db_close();
						Flight::register_session($uid);
					} else $err=true;
				} else $err=true;
			}
			if($err)
				Flight::set('login_notify',Flight::get('lang.guest_login_error'));
		});
		
		
		Flight::route('/'.Flight::get('app.path.login'), function(){
			Flight::login_form();
			Flight::render('main', array('title' => Flight::get('lang.guest_login_title'), 'tpl'=>'login'));
		});
	}