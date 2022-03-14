<?php

	if(!defined("_INSIDE_APP")) exit();

	function user_logged() {
		global $accounts,$_SESSION;
		$ret = false;
		if(isset($_SESSION['user'])) {
			foreach($accounts as $account) {
				if($account['login'] == $_SESSION['user']['login'] && $account['password'] == $_SESSION['user']['password']) {
					$ret = true;
					break;
				}
			}
		}
		return $ret;
	}
	
	function load_tpl($tpl) {
		$tpl = 'tpl/'.$tpl.'.php';
		if(file_exists($tpl)) {
			include $tpl;
		} else echo "Brak pliku szablonu: $tpl";
	}
?>