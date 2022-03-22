<?php
	class secure {
		private $sess;
		
		public function __construct($cookiename) {
			//$this->$db = $db;
			if(isset($_SESSION[$cookiename])) $this->sess = $_SESSION[$cookiename];
		}
		
		private function is_logged() {
			/*
			if(isset($this->sess)) {
				$q=$db->query('SELECT type FROM players WHERE id="'.$_SESSION[$this->sess_hashsecurity]['id'].'" AND password = "'.$_SESSION[$this->sess_hashsecurity]['key'].'" LIMIT 1;');
				if($q->num_rows == 1) {
					mysqli_free_result($q);
					return true;
				}
			}*/
			if(isset($this->sess)) return true;
			return false;
		}
		
		public function get() {
			if($this->is_logged()) {
				return array('user_logged'=>true);
			} else {
				return array('user_logged'=>false);
			}
		}
	}