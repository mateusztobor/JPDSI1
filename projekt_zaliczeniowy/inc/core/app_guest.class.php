<?php
	class app_guest {
		private $db,$cookiename,$alerts=array();
		
		public function init($db) {
			$this->db = $db;
		}
		

		
		public function new_account_form() {
			if(isset($_POST['post_email']) && isset($_POST['post_nick']) && isset($_POST['post_password']) && isset($_POST['post_repassword'])) {
				if($this->new_account_form_valid()) {
					if(!$this->create_new_account())
						$this->alerts[] = 'guest_register_unknown_error';
				}
			}
		}
		
		public function new_account_results() {
			if(isset($_POST['post_email']) && isset($_POST['post_nick']) && isset($_POST['post_password']) && isset($_POST['post_repassword'])) {
				if(count($this->alerts) == 0) return 1;
				return 2;
			}
			return 0;
		}
		
		private function create_new_account() {
			$sql = 'INSERT INTO users(nick,email,password) VALUES("'.htmlspecialchars($_POST['post_nick']).'","'.$_POST['post_email'].'","'.password_hash($_POST['post_password'], PASSWORD_DEFAULT).'")';
			return $this->db->query($sql);
		}
		
		private function check_nick_unique($nick) {
			$count = $this->db->querySingle('SELECT COUNT(*) as count FROM users WHERE nick="'.$nick.'";');
			if($count > 0) return false;
			return true;
		}
		
		private function check_email_unique($mail) {
			$count = $this->db->querySingle('SELECT COUNT(*) as count FROM users WHERE email="'.$mail.'";');
			if($count > 0) return false;
			return true;
		}
		
		private function new_account_form_valid() {
			//check mail
			if(!empty($_POST['post_email'])) {
				if(filter_var($_POST['post_email'], FILTER_VALIDATE_EMAIL)) {
					if(!$this->check_email_unique($_POST['post_email']))
						$this->alerts[] = 'guest_register_not_unique_email';
				} else $this->alerts[] = 'guest_register_invalid_email';
			} else $this->alerts[] = 'guest_register_not_isset_email';
			//check password
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
			//check nick
			if(!empty($_POST['post_nick'])) {
				if(mb_strlen($_POST['post_nick']) >= 3 && mb_strlen($_POST['post_nick']) <= 15) {
					if(!$this->check_nick_unique(htmlspecialchars($_POST['post_nick'])))
						$this->alerts[] = 'guest_register_not_unique_nick';
				} else $this->alerts[] = 'guest_register_nick_not_pass';
			} else $this->alerts[] = 'guest_register_not_isset_nick';
			//return
			if($this->new_account_results() == 1) return true;
			else return false;
		}
		
		public function set_cookiename($set) {
			$this->cookiename = $set;
		}
		
		public function login_form() {
			if(isset($_POST['post_email']) && isset($_POST['post_password'])) 
				return $this->check_login();
			return 0;
		}
		
		private function check_login() {
			$check = $this->db->querySingle('SELECT COUNT(*) as count FROM users WHERE email="'.$_POST['post_email'].'";');
			if($check == 1) {
				unset($check);
				$pass = $this->db->querySingle('SELECT password FROM users WHERE email="'.$_POST['post_email'].'";');
				if(password_verify($_POST['post_password'], $pass)) {
					unset($pass);
					$_SESSION[$this->cookiename] = $this->db->querySingle('SELECT id FROM users WHERE email="'.$_POST['post_email'].'";');
					return 2;
				} else return 1;
			} else return 1;
		}
		
		public function get_alerts() {
			return $this->alerts;
		}
		
	}