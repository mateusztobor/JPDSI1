<?php
	class categories_controller{
		public function view() {
			Flight::render('main_start', array('title' => Flight::get('lang.categories_title'), 'tpl'=>'posts'));
			$this->posts_list();
			Flight::render('main_end');
		}
		
		private function posts_list() {
			Flight::db_open();
			
			$results = Flight::db()->query('SELECT id,title FROM categories WHERE user_id = "'.Flight::get('user.id').'";');
			while ($row = $results->fetchArray()) {
				Flight::render('categories_category', array('cat_id' => $row['id'], 'cat_title' => $row['title']));
			}
		}
	}