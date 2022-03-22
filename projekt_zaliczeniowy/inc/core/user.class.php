<?php
	class user {
		private $db,$sess,$is_logged=false;
		
		public function __construct($db,$cookiename) {
			$this->$db = $db;
			if(isset($_SESSION[$cookiename])) $this->sess = $_SESSION[$cookiename];
		}
		
		public function is_logged() {
			if(isset($this->sess)) {
				$q=$db->query('SELECT type FROM players WHERE id="'.$_SESSION[$this->sess_hashsecurity]['id'].'" AND password = "'.$_SESSION[$this->sess_hashsecurity]['key'].'" LIMIT 1;');
				if($q->num_rows == 1) {
					mysqli_free_result($q);
					return true;
				}
			}
			return false;
		}
	}