<?php
	class notes_controller{
		public function view() {
			if(Flight::get('user.type') == 0) {
				$tpl = "notes_guest";
				$this->guest_form();
				
			} else {
				$tpl = "notes_user";
				
				
			}
			
			Flight::render('main', array('title' => Flight::get('lang.notes_title'), 'tpl'=>$tpl));
			
		}
		
		private function guest_form() {
			if(isset($_POST['post_notes'])) {
				if(!empty($_POST['post_notes'])) {
					$content = htmlspecialchars($_POST['post_notes']);
					$pin = Flight::get_pin_unique(Flight::get('app.notes.pin_length'),'posts','pin');
					if($this->guest_insert_post($content,$pin))
						Flight::redirect(Flight::get('app.url').$pin);
				}
			}
			//Flight::set('notify',"NIE NIE NIE");
		}
		
		private function guest_insert_post($content,$pin) {
			Flight::db_open();
			$sql = 'INSERT INTO posts(content,pin) VALUES("'.$content.'","'.$pin.'");';
			return Flight::db()->query($sql);
		}
	}