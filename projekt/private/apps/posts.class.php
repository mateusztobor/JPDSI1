<?php
	class posts_controller{
		public function view() {
			Flight::render('main_start', array('title' => Flight::get('lang.guest_login_title'), 'tpl'=>'posts'));
			$this->posts_list();
			Flight::render('main_end');
		}
		
		private function posts_list() {
			Flight::db_open();
			
			//default cat posts
			Flight::render('posts_category_start', array('cat_id' => 0, 'cat_title' => Flight::get('lang.default_category')));
			$results = Flight::db()->query('SELECT * FROM posts WHERE category is NULL;');
			
			$c = 0;
			$twicePost = false;
			while ($row = $results->fetchArray()) {
				if(!$twicePost) Flight::render('2posts_start');
				if($row['share']) $share = Flight::get('lang.public');
				else $share = Flight::get('lang.private');
				Flight::render('post', array('post_title' => $row['title'], 'post_content' => Flight::short_text($row['content'],Flight::get('app.notes.view_post_max_lenght')), 'post_pin' => $row['pin'], 'post_share' => $share));
				if($twicePost) Flight::render('2posts_end');
				$twicePost=!$twicePost;
				$c++;
			}
			if($c%2 != 0) Flight::render('2posts_end');
			Flight::render('posts_category_end');
			
			
			$results = Flight::db()->query('SELECT id,title FROM categories WHERE user_id = "'.Flight::get('user.id').'";');
			while ($row = $results->fetchArray()) {
				Flight::render('posts_category_start', array('cat_id' => $row['id'], 'cat_title' => $row['title']));
				$twicePost = false;
				$c=0;
				$results2 = Flight::db()->query('SELECT * FROM posts WHERE category = "'.$row['id'].'";');
				while ($row2 = $results2->fetchArray()) {
					if(!$twicePost) Flight::render('2posts_start');
					if($row2['share']) $share = Flight::get('lang.public');
					else $share = Flight::get('lang.private');
					Flight::render('post', array('post_title' => $row2['title'], 'post_content' => Flight::short_text($row2['content'],Flight::get('app.notes.view_post_max_lenght')), 'post_pin' => $row2['pin'], 'post_share' => $share));
					if($twicePost) Flight::render('2posts_end');
					$twicePost=!$twicePost;
					$c++;
				}
				if($c%2 != 0) Flight::render('2posts_end');
				Flight::render('posts_category_end');
			}
		}
	}