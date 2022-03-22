<?php
	class user {
		private $db, $sess_hashsecurity;
		
		public function __construct($db,$sess_hashsecurity) {
			$this->$db = $db;
			$this->sess_hashsecurity = $sess_hashsecurity;
		}
		
		public function is_logged() {
			//$_COOKIE[$cookie_name]
			if(isset($_COOKIE[$this->sess_hashsecurity])) {
				$q=$db->query('SELECT type FROM players WHERE id="'.$_SESSION[$this->sess_hashsecurity]['id'].'" AND password = "'.$_SESSION[$this->sess_hashsecurity]['key'].'" LIMIT 1;');
				if($q->num_rows == 1) {
					mysqli_free_result($q);
					return true;
				}
			}
			return false;
		}
	}