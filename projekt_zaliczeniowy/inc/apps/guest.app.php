<?php 
	if(isset($_GET['id'])) {
		$this->app_secure("not_logged");
		if($_GET['id'] == "login") {
			if(file_exists($this->config->get('smarty_TemplateDir').'/app_guest_login.tpl'))
				$this->tpl->display('app_guest_login.tpl');
		}
		elseif($_GET['id'] == "register") {
			$this->tpl->assign('guest_register_message',"");
			
			if(file_exists($this->config->get('smarty_TemplateDir').'/app_guest_register.tpl'))
				$this->tpl->display('app_guest_register.tpl');
		}
		else {
			header('Location: '.$this->config->get('system_url'));
			exit;
		}
	} else {
		header('Location: '.$this->config->get('system_url'));
		exit;
	}
	
?>
