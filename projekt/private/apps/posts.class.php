<?php
	class categories_controller{
		public function view() {
			Flight::render('main_start', array('title' => Flight::get('lang.guest_login_title'), 'tpl'=>'posts'));
			$this->posts_list();
			Flight::render('main_end');
		}
		
		private function posts_list() {
			Flight::db_open();
			
			//default cat posts
			Flight::render('posts_category_start', array('cat_id' => 0, 'cat_title' => 'Domyślna kategoria'));
			$results = Flight::db()->query('SELECT * FROM posts WHERE category is NULL;');
			
			//false - 1
			// true - 2
			$twicePost = false;
			
			while ($row = $results->fetchArray()) {
				if(!$twicePost) Flight::render('2posts_start');
				Flight::render('post', array('post_title' => $row['title'], 'post_content' => $row['content'], 'post_pin' => $row['pin']));
				if($twicePost) Flight::render('2posts_end');
				$twicePost=!$twicePost;
			}
			Flight::render('posts_category_end');
			
			/*
			$results = Flight::db()->query('SELECT * FROM categories WHERE user_id="'.Flight::get('user.id').'";');
			while ($row = $results->fetchArray()) {
				Flight::render('posts_category', array('cat_id' => $row['id'], 'cat_title' => $row['title']));
			}
			*/
		}
		
		/*
		private function form() {
			$err=false;
			if(isset($_POST['post_email']) && isset($_POST['post_password'])) {
				Flight::db_open();
				$count = Flight::db()->querySingle('SELECT COUNT(*) as count FROM users WHERE email="'.$_POST['post_email'].'";');
				if($count == 1) {
					$pass = Flight::db()->querySingle('SELECT password FROM users WHERE email="'.$_POST['post_email'].'";');
					if(password_verify($_POST['post_password'], $pass)) {
						$uid = Flight::db()->querySingle('SELECT id FROM users WHERE email="'.$_POST['post_email'].'";');
						Flight::register_session($uid);
					} else $err=true;
				} else $err=true;
			}
			if($err)
				Flight::set('notify',Flight::get('lang.guest_login_error'));
		}
		*/
	}