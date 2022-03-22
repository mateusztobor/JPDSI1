<?php
	class core {
		private $config, $db, $lang, $tpl, $_secure, $secure, $app;
		
		public function __construct() {
			//open buffer
			ob_start();
			
			$this->load_config();
			
			//set error reporting
			error_reporting($this->config->get('system_error_reporting'));
			//set header charset
			header('Content-Type:text/html;charset='.$this->config->get('system_charset'));
			//set timezone
			date_default_timezone_set($this->config->get('system_timezone'));
			//start session
			session_start();
			
			$this->load_secure();
			
			$this->load_smarty();
			
			$this->db = new PDO('sqlite:'.$this->config->get('system_db_path'));
			
			
			
			$this->load_app();
			
			ob_end_flush();
			
			//if($this->user['is_logged']) echo "ok";
			//else echo "nie ok";
		}
		
		private function load_config() {
			//load configs
			require_once './inc/core/config.class.php';
			$config = new config;
			require_once './inc/configs/config.php';
			$this->config = $config;
			unset($config);
		}
		
		private function load_secure() {
			require_once './inc/core/secure.class.php';
			$this->secure = new secure($this->config->get('system_user_cookiename'));
		}
		
		private function load_smarty() {
			//load and set smarty
			require './inc/libs/smarty/Smarty.class.php';
			$tpl = new Smarty;
			$tpl->debugging = $this->config->get('smarty_debugging');
			$tpl->setCacheDir($this->config->get('smarty_CacheDir'));
			$tpl->caching = $this->config->get('smarty_caching');
			$tpl->cache_lifetime = $this->config->get('smarty_cache_lifetime');
			$tpl->setConfigDir($this->config->get('smarty_ConfigDir'));
			$tpl->setPluginsDir($this->config->get('smarty_PluginsDir'));
			$tpl->setTemplateDir($this->config->get('smarty_TemplateDir'));
			$tpl->setCompileDir($this->config->get('smarty_CompileDir'));
			$tpl->force_compile = $this->config->get('smarty_force_compile');
			foreach($this->config->get('smarty_allowedConfigValues') as $config_field) {
				$tpl->assign($config_field,$this->config->get($config_field));
			}
			foreach($this->config->get('smarty_allowedSecureValues') as $secure_field) {
				if(isset($this->secure->get()[$secure_field]))
					$tpl->assign($secure_field,$this->secure->get()[$secure_field]);	
			}
			$this->tpl = $tpl;
			unset($tpl);
		}
		
		private function load_app() {
			if(!isset($_GET['app'])) $_GET['app'] = $this->config->get('system_app_start');
			$_GET['app'] = htmlspecialchars($_GET['app']);
			
			if(file_exists('./inc/apps/'.$_GET['app'].'.app.php')) {
				
				if(file_exists('./inc/core/app_'.$_GET['app'].'.class.php')) {
					require_once './inc/core/app_'.$_GET['app'].'.class.php';
					eval('$this->app = new app_'.$_GET['app'].';');
				}
				
				include './inc/apps/'.$_GET['app'].'.app.php';
				
				if(file_exists($this->config->get('smarty_TemplateDir').'/app_'.$_GET['app'].'.tpl'))
					$this->tpl->display('app_'.$_GET['app'].'.tpl');
				
			} else {
				if(file_exists($this->config->get('smarty_TemplateDir').'/'.$this->config->get('system_page_404').'.tpl'))
					$this->tpl->display($this->config->get('system_page_404').'.tpl');
				else print('404');
			}
		}
		
		//będzie robione
		private function load_plugins() {
			return false;
		}
		
		private function set_lang($lang) {
			$lang = new config;
			require_once './inc/langs/'.$this->config->get('system_default_language').'.lang.php';
			$this->lang = $lang;
			unset($lang);
			$this->config->set('system_current_language',$lang);
		}
	}