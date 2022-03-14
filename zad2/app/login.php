<?php
	if(!defined("_INSIDE_APP")) exit;
	
	if(user_logged()) {
		unset($_SESSION['user']);
		header('Location: index.php');
		exit;
	}
	
	$errors="";
	
	if(isset($_POST['post_login']) && isset($_POST['post_password'])) {
		$logged=false;
		foreach($accounts as $account) {
			if($account['login'] == $_POST['post_login'] && $account['password'] == $_POST['post_password']) {
				$_SESSION['user'] = array('login'=>$_POST['post_login'],'password'=>$_POST['post_password']);
				break;
			}
		}
		if(user_logged()) {
			header('Location: ?p=start');
			exit;
		} else {
			$errors = '<div class="alert alert-danger mb-3" role="alert">Podana kombinacja loginu i hasła jest nieprawidłowa!</div>';
		}
	}
	
	//wywołanie widoku
	include 'login_view.php';