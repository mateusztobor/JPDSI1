<?php
	class app_user {
		private $db,$sess,$alerts=array();
		
		public function init($db,$sess) {
			$this->db = $db;
			$this->sess = $sess;
		}
		
		public function change_password_form() {
			if($this->change_password_results() == 1) {
			//check password
				if($this->check_old_password($_POST['post_oldpassword'])) {
					if(!empty($_POST['post_password'])) {
						if($_POST['post_password'] === $_POST['post_repassword']) {
							$uppercase = preg_match('@[A-Z]@', $_POST['post_password']);
							$lowercase = preg_match('@[a-z]@', $_POST['post_password']);
							$number    = preg_match('@[0-9]@', $_POST['post_password']);
							$specialChars = preg_match('@[^\w]@', $_POST['post_password']);
							if(
								!$uppercase ||
								!$lowercase ||
								!$number ||
								!$specialChars ||
								mb_strlen($_POST['post_password']) < 6
							) {
								$this->alerts[] = 'guest_register_password_secure_error';
							}
						} else $this->alerts[] = 'guest_register_password_not_match';
					} else $this->alerts[] = 'guest_register_not_isset_password';
				} else $this->alerts[] = 'user_settings_chpass_old_pass_error';
				
				if($this->change_password_results() == 1) {
					$sql = 'UPDATE users SET password="'.password_hash($_POST['post_password'], PASSWORD_DEFAULT).'" WHERE id='.$this->sess.';';
					if(!$this->db->query($sql)) $this->alerts[] = 'user_settings_chpass_unkown_error';
				}
			}
		}
			
		public function change_password_results() {
			if(isset($_POST['post_oldpassword']) && isset($_POST['post_password']) && isset($_POST['post_repassword'])) {
				if(count($this->alerts) == 0) return 1;
				return 2;
			}
			return 0;
		}
		
		public function check_old_password($input) {
			$pass = $this->db->querySingle('SELECT password FROM users WHERE id="'.$this->sess.'";');
			if(password_verify($input, $pass)) return true;
			return false;
		}
		
		public function get_alerts() {
			return $this->alerts;
		}
		
	}