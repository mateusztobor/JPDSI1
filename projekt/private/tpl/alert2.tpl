<?php
	Flight::render('head_start', array('title' => Flight::get('notify_title').' - '.Flight::get('app.name')));
	Flight::render('head_end');
	
	Flight::render('header_start');
	if(Flight::get('user.type') != 0) {
		Flight::render('nav_user');
		if(Flight::get('user.type') == 2)
			Flight::render('nav_admin');
	}
	else Flight::render('nav_guest');
	Flight::render('header_end');
	
	Flight::render('content_start');
?>
	<div class="alert alert-<?php print(Flight::get('notify_type')); ?>" role="alert"><?php print(Flight::get('notify')); ?></div>
	
<?php
	Flight::render('content_end');
	
	Flight::render('footer');
	Flight::render('end');
?>