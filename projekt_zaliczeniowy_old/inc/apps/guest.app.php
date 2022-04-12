<?php 
	if(isset($_GET['id'])) {
		$this->app_secure("not_logged");
		
		if($_GET['id'] == "login") {
			$this->app->init($this->db);
			$this->app->set_cookiename($this->config->get('system_user_cookiename'));
			
			$login_form = $this->app->login_form();
			if($login_form == 1)
				$this->tpl->assign('guest_login_alerts','<div class="alert alert-warning" role="alert">'.$this->lang->get('guest_login_error').'</div>');
			elseif($login_form == 2) 
				header('Location: '.$this->config->get('system_url'));
			
			else $this->tpl->assign('guest_login_alerts',"");
			
			if(file_exists($this->config->get('smarty_TemplateDir').'/app_guest_login.tpl'))
				$this->tpl->display('app_guest_login.tpl');
		}
		elseif($_GET['id'] == "register") {
			$this->tpl->assign('guest_register_alerts',"");
			$this->app->init($this->db);
			
			
			

			$this->app->new_account_form();
			if($this->app->new_account_results() > 0) {
				if($this->app->new_account_results() == 1)
					$this->tpl->assign('guest_register_alerts','<div class="alert alert-success" role="alert">'.$this->lang->get('guest_register_success').'</div>');
				else {
					$errors = "";
					
					foreach($this->app->get_alerts() as $alert) {
						$errors .= '<div class="alert alert-warning" role="alert">'.$this->lang->get($alert).'</div>';
					}
					
					
					
					$this->tpl->assign('guest_register_alerts',$errors);
					
					
				}
			}
			
			if(file_exists($this->config->get('smarty_TemplateDir').'/app_guest_register.tpl'))
				$this->tpl->display('app_guest_register.tpl');
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
