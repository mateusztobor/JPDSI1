<?php 
	//echo $this->secure->get_pin_u(6,'posts','pin');
	if($this->secure->is_logged()) {
		if(file_exists($this->config->get('smarty_TemplateDir').'/app_notes_user.tpl'))
			$this->tpl->display('app_notes_user.tpl');
	} else {
		if(file_exists($this->config->get('smarty_TemplateDir').'/app_notes_guest.tpl'))
			$this->tpl->display('app_notes_guest.tpl');
	}
?>
