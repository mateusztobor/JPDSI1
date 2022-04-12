<?php 
	if(isset($_GET['id'])) {
		$this->app->init($this->db);
		if($this->app->post_isset()) {
			$this->tpl->assign('post_content',$this->app->post_content());
			if(file_exists($this->config->get('smarty_TemplateDir').'/app_p_post.tpl'))
				$this->tpl->display('app_p_post.tpl');
		} else $this->tpl_print_error(404);
	} else $this->tpl_print_error(404);
?>
