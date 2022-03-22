<?php
	class app_guest {
		private $db,$alerts=array(),$success;
		
		public function init($db,$lang) {
			$this->db = $db;
		}
		
		public function new_account_form() {
			if(isset($_POST['post_email']) && isset($_POST['post_nick']) && isset($_POST['post_password']) && isset($_POST['post_repassword'])) {
				if(!empty($_POST['post_email'])) {
					if(!filter_var($_POST['post_email'], FILTER_VALIDATE_EMAIL))
						$alerts[] = 'guest_register_invalid_email';
				} else $alerts[] = 'guest_register_not_isset_email';
			
				
			
			
			} 
		}
		
		private function register_valid_data() {
			
		}
		
		private function create_account($mail,$pass,$nick) {
			$this->alert(array('warning','KURWAAA'));
		}
		
		public function get_alert() {
			return $alert;
		}
		
	}