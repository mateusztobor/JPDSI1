<?php
	if(!defined("_INSIDE_APP")) exit;
	
	if(!user_logged()) {
		header('Location: ?p=login&c');
		exit;
	}
	
	//wywołanie widoku
	include 'other_view.php';