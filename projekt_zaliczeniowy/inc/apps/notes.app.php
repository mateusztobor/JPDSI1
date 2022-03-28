<?php 
	//echo $this->secure->get_pin_u(6,'posts','pin');
	if($this->secure->is_logged()) {
		if(file_exists($this->config->get('smarty_TemplateDir').'/app_notes_user.tpl'))
			$this->tpl->display('app_notes_user.tpl');
	} else {
		$this->tpl->assign('notes_alerts',"");
		$this->app->init_guest($this->db,$this->secure->get_pin_u($this->config->get('notes_pin_length'),'posts','pin'));
		$this->app->notes_form_guest();
		if($this->app->notes_form_guest_results() == 1) 
			header('Location: '.$this->config->get('system_url').'p/'.$this->app->notes_form_pid());
		elseif($this->app->notes_form_guest_results() == 2) {
			$errors = "";
			foreach($this->app->get_alerts() as $alert) {
				$errors .= '<div class="alert alert-warning" role="alert">'.$this->lang->get($alert).'</div>';
			}
			$this->tpl->assign('notes_alerts',$errors);
		}
		
		if(file_exists($this->config->get('smarty_TemplateDir').'/app_notes_guest.tpl'))
			$this->tpl->display('app_notes_guest.tpl');
	}
?>
