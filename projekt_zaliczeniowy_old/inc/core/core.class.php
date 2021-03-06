<?php
	class core {
		private $config, $db, $lang, $tpl, $secure, $app, $sess;
		
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
			
			$this->load_db();
			$this->load_secure();
			
			$this->load_smarty();
			
			
			
			$this->set_lang($this->config->get('system_default_language'));
			
			//$this->load_plugins();
			
			$this->load_app();
			
			ob_end_flush();
		}
		
		private function load_config() {
			//load configs
			require_once './inc/core/config.class.php';
			$config = new config;
			require_once './inc/configs/config.php';
			$this->config = $config;
			unset($config);
		}
		
		private function load_db() {
			$this->db = new SQLite3($this->config->get('system_db_path'));
			if(!$this->db) {
				$this->tpl_print_error('error_db');
				exit;
			}
		}
		
		private function load_secure() {
			require_once './inc/core/secure.class.php';
			$this->secure = new secure($this->db,$this->config->get('system_user_cookiename'));
			$this->sess = $this->secure->load_sess();
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
				
			} else $this->tpl_print_error(404);
		}
		
		private function tpl_print_error($error) {
			if(file_exists($this->config->get('smarty_TemplateDir').'/'.$this->config->get('system_page_'.$error).'.tpl'))
				$this->tpl->display($this->config->get('system_page_'.$error).'.tpl');
			else print($error);
		}
		
		private function app_secure($what) {
			if($what == "logged") {
				if(!$this->secure->is_logged()) {
					$this->tpl_print_error(403);
					exit;
				}
			}
			elseif($what == "not_logged") {
				if($this->secure->is_logged()) {
					$this->tpl_print_error(403);
					exit;
				}
			}
		}
		
		//b??dzie robione
		private function load_plugins() {
			return false;
		}
		
		private function set_lang($_lang) {
			require_once './inc/core/lang.class.php';
			$lang = new lang;
			require_once './inc/langs/'.$_lang.'.lang.php';
			$this->lang = $lang;
			unset($lang);
			$this->tpl->assign('lang',$this->lang->getAll());		
			$this->config->set('system_current_language',$_lang);
		}
	}