<?php 
	if(isset($_GET['id'])) {
		$this->app_secure("logged");
		
		if($_GET['id'] == "logout") {
			unset($_SESSION[$this->config->get('system_user_cookiename')]);
			header('Location: '.$this->config->get('system_url'));
		}
		elseif($_GET['id'] == "settings") {
			$this->tpl->assign('user_chpass_alerts',"");
			
			$this->app->init($this->db,$this->sess);
			
			$this->app->change_password_form();
			if($this->app->change_password_results() > 0) {
				if($this->app->change_password_results() == 1)
					$this->tpl->assign('user_chpass_alerts','<div class="alert alert-success" role="alert">'.$this->lang->get('user_settings_chpass_success').'</div>');
				else {
					$errors = "";
					foreach($this->app->get_alerts() as $alert) {
						$errors .= '<div class="alert alert-warning" role="alert">'.$this->lang->get($alert).'</div>';
					}
					$this->tpl->assign('user_chpass_alerts',$errors);
				}
			}
			
			if(file_exists($this->config->get('smarty_TemplateDir').'/app_user_settings.tpl'))
				$this->tpl->display('app_user_settings.tpl');
		}
		else {
			$this->tpl_print_error(404);
			exit;
		}
	} else {
		$this->tpl_print_error(404);
		exit;
	}
	
?>
