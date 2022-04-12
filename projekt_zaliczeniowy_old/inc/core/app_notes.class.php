<?php
	class app_notes {
		private $db, $sess, $pin, $alerts=array();
		
		public function init_guest($db,$pin) {
			$this->db = $db;
			$this->pin = $pin;
		}
		
		public function init_user($db, $sess, $pin) {
			$this->db = $db;
			$this->sess = $sess;
			$this->pin = $pin;
		}
		
		public function notes_form_guest() {
			if($this->notes_form_guest_results() == 1) {
				$this->notes_form_guest_valid();
				if($this->notes_form_guest_results() == 1)
					if(!$this->notes_form_guest_insert())
						$this->alerts[] = 'notes_unkown_error';
			}
		}
		
		public function notes_form_guest_results() {
			if(isset($_POST['post_notes'])) {
				if(count($this->alerts) == 0) return 1;
				return 2;
			}
			return 0;
		}
		
		private function notes_form_guest_valid() {
			if(empty($_POST['post_notes']))
				$this->alerts[] = 'notes_empty_notes';
		}
		
		
		private function notes_form_guest_insert() {
			$sql = 'INSERT INTO posts(content,pin) VALUES("'.htmlspecialchars($_POST['post_notes']).'","'.$this->pin.'");';
			return $this->db->query($sql);
		}

		public function notes_form_pid() {
			$id = 'SELECT last_insert_rowid();';
			if($id = $this->db->querySingle($id)) {
				$pin = 'SELECT pin FROM posts where id="'.$id.'";';
				if($pin = $this->db->querySingle($pin))
					return $pin;
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