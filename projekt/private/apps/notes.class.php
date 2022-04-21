<?php
	class notes_controller{
		public function view() {
			if(Flight::get('user.type') == 0) {
				$tpl = "notes_guest";
				$this->guest_form();
				
			} else {
				$tpl = "notes_user";
				$this->user_form();
				
			}
			
			Flight::render('main', array('title' => Flight::get('lang.notes_title'), 'tpl'=>$tpl));
			
		}
		
		//For guests (user.type = 0)
		private function guest_form() {
			if(isset($_POST['post_notes'])) {
				if(!empty($_POST['post_notes'])) {
					$content = htmlspecialchars($_POST['post_notes']);
					$pin = Flight::get_pin_unique(Flight::get('app.notes.pin_length'),'posts','pin');
					if($this->guest_insert_post($content,$pin))
						Flight::redirect(Flight::get('app.url').$pin);
				}
			}
		}
		
		private function guest_insert_post($content,$pin) {
			Flight::db_open();
			$sql = 'INSERT INTO posts(content,pin) VALUES("'.$content.'","'.$pin.'");';
			return Flight::db()->query($sql);
		}
		
		
		//For users (user.type = 1)
		private function user_form() {
			if(isset($_POST['post_notes']) && isset($_POST['post_share']) && isset($_POST['post_title']) && isset($_POST['post_category'])) {
				
				if($this->user_form_valid()) {
					Flight::set('notify',"aaa");
					$title = htmlspecialchars($_POST['post_title']);
					$content = htmlspecialchars($_POST['post_notes']);
					$share = (int)(htmlspecialchars($_POST['post_share']));
					$pin = Flight::get_pin_unique(Flight::get('app.notes.pin_length'),'posts','pin');
					
					
					if(empty($_POST['post_category'])) $res = $this->user_insert_post2($title,$content,$share,$pin);
					else {
						$category = (int)(htmlspecialchars($_POST['post_category']));
						$res = $this->user_insert_post($title,$content,$category,$share,$pin);
						
					}
					
					if($res) Flight::redirect(Flight::get('app.url').$pin);
				
				}
			}
			//Flight::set('notify',"NIE NIE NIE");
		}
		
		private function user_form_valid() {
			$ok = true;
			
			if(!empty($_POST['post_title'])) {
				if(mb_strlen($_POST['post_title']) > 40) {
					$ok=false;
					
				}
			}

			if(empty($_POST['post_notes'])) $ok=false;
			
			if(!empty($_POST['post_category'])) {
				if(!$this->check_category(htmlspecialchars($_POST['post_category']))) {
					$ok=false;
				}
			}
			
			if(isset($_POST['post_share'])) {
				if(is_int((int)$_POST['post_share'])) {
					if($_POST['post_share'] != 0 && $_POST['post_share'] != 1) {
						$ok=false;
					}
				} else {
					$ok=false;
				}
			} else {
				$ok=false;
			}
			
			return $ok;
		}
		
		private function check_category($id) {
			Flight::db_open();
			$count = Flight::db()->querySingle('SELECT COUNT(*) as count FROM categories WHERE id="'.$id.'" AND user_id="'.Flight::get('user.id').'";');
			if($count==1) return true;
			return false;
		}
		
		private function user_insert_post($title,$content,$category,$share,$pin) {
			Flight::db_open();
			$sql = 'INSERT INTO posts(title,content,category,share,pin) VALUES(
																				"'.$title.'",
																				"'.$content.'",
																				"'.$category.'",
																				"'.$share.'",
																				"'.$pin.'");';
			return Flight::db()->query($sql);
		}
		
		private function user_insert_post2($title,$content,$share,$pin) {
			Flight::db_open();
			$sql = 'INSERT INTO posts(title,content,share,pin) VALUES(
																				"'.$title.'",
																				"'.$content.'",
																				"'.$share.'",
																				"'.$pin.'");';
			return Flight::db()->query($sql);
		}
	}