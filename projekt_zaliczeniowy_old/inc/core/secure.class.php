<?php
	class secure {
		private $db,$sess,$cookiename;
		
		public function __construct($db,$cookiename) {
			$this->db = $db;
			$this->cookiename = $cookiename;
			if(isset($_SESSION[$cookiename])) $this->sess = $_SESSION[$cookiename];
		}
		
		public function is_logged() {
			if(isset($this->sess)) {
				$check = $this->db->querySingle('SELECT COUNT(*) as count FROM users WHERE id="'.$this->sess.'";');
				if($check == 1) return true;
			}
			return false;
		}
		
		public function load_sess() {
			return $this->sess;
		}
		
		public function get() {
			if($this->is_logged()) {
				$nick = 'SELECT nick FROM users WHERE id="'.$this->sess.'";';	
				$nick = $this->db->querySingle($nick);
				$mail = 'SELECT email FROM users WHERE id="'.$this->sess.'";';	
				$mail = $this->db->querySingle($mail);
				return array('user_logged'=>true, 'user_nick'=>$nick, 'user_email'=>$mail);
			} else {
				return array('user_logged'=>false);
			}
		}
		
		public function get_pin($length) {
			return $this->get_pin_construct($length);
		}
		
		public function get_pin_u($length,$table,$col) {
			$q = 1;
			while($q>0) {
				$pin = $this->get_pin_construct($length);
				$q=$count = $this->db->querySingle('SELECT COUNT(*) as count FROM '.$table.' WHERE '.$col.'="'.$pin.'";');
			}
			return $pin;
		}
		
		private function get_pin_construct($length) {
			$chars= "0123456789";
			$output="";
			for ($i=0; $i < $length; $i++){
				$output .= substr($chars, rand(0, strlen($chars)-1), 1);
			}
			return $output;
		}
	}