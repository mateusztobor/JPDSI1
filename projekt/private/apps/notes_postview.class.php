<?php
class notes_postview_controller {
	private $id;
	
	public function __construct($id) {
		$this->id = $id;
		Flight::set('notes_post_id',$id);
	}
	
	public function view() {
		Flight::db_open();
		if($this->check_exists()) {
			$this->get_post('author'); //maybe add author name
			$this->get_author_name();
			$this->get_post('share');
			$this->get_post('date');
			Flight::set('notes_post_date', Flight::date_pl(Flight::get('notes_post_date')));
			if(Flight::get('user.type') > 0 && Flight::get('user.id') != Flight::get('notes_post_author')) {
				//something
				
				//pobierz jeszcze
				$this->get_post('content');
				exit('edit as author');
				//add admin as max author
			} else {
				
				$this->get_category();
				
				if(!Flight::get('notes_post_share') && Flight::get('notes_post_author') == Flight::get('user.id') || Flight::get('notes_post_share') || Flight::get('user.type') == 2) {
					
					$this->get_post('title');
					$this->get_post('content');
					
					Flight::render('main', array('title' => $this->get_title(), 'tpl'=>'notes_postview'));
				} else {
					exit('błond');
				}
			}
		} else {
			Flight::set('notify_title', Flight::get('lang.notes.postview_notexist_title'));
			Flight::set('notify_type', 'danger');
			Flight::set('notify', Flight::get('lang.notes.postview_notexist'));
			Flight::render('alert2', array('title' => $this->get_title(), 'tpl'=>'notes_postview'));
		
		}
	
	}
	
	private function check_exists() {
		$count = Flight::db()->querySingle('SELECT COUNT(*) as count FROM posts WHERE pin="'.$this->id.'";');
		if($count==1) return true;
		return false;
	}
	
	private function get_title() {
		$title = Flight::db()->querySingle('SELECT title FROM posts WHERE pin="'.$this->id.'";');
		if(empty($title)) return Flight::get('lang.notes.postview_title').$this->id;
		else return Flight::get('lang.notes.postview_title').$title;
	}
	
	private function get_post($what) {
		$content = Flight::db()->querySingle('SELECT '.$what.' FROM posts WHERE pin="'.$this->id.'";');
		if($content) Flight::set('notes_post_'.$what,$content);
	}
	
	private function get_author_name() {
		$set = Flight::db()->querySingle('SELECT nick FROM users WHERE id="'.Flight::get('notes_post_author').'";');
		if($set) Flight::set('notes_post_author_nick',$set);
	}
	
	private function get_category() {
		$this->get_post('category');
		if(!empty(Flight::get('notes_post_category'))) {
			$catName = Flight::db()->querySingle('SELECT title FROM categories WHERE id="'.Flight::get('notes_post_category').'";');
			if($catName) Flight::set('notes_post_category',$catName);
		} else Flight::set('notes_post_category', Flight::get('lang.default_category'));
	}
	
}