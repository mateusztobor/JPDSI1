<?php
class notes_postview_controller {
	private $id;
	
	public function __construct($id) {
		$this->id = $id;
		Flight::set('notes_post_id',$id);
	}
	
	public function view() {
		
		/*
		if(Flight::get('user.type') == 0) {
			$tpl = "notes_guest";
			//$this->guest_form();
			
		} else {
			$tpl = "notes_user";
			
			
		}*/
		
		if($this->check_exists()) {
			$this->get_post('share');
			$this->get_post('author');
			$this->get_category();
			
			if(!Flight::get('notes_post_share') && Flight::get('notes_post_author') == Flight::get('user.id') || Flight::get('notes_post_share') || Flight::get('user.type') == 2) {
				
				Flight::set('title',$this->get_title2());
				$this->get_content();
				
				Flight::render('main', array('title' => $this->get_title(), 'tpl'=>'notes_postview'));
			} else {
				exit('błond');
			}
		} else {
			Flight::set('notify_title', Flight::get('lang.notes.postview_notexist_title'));
			Flight::set('notify_type', 'danger');
			Flight::set('notify', Flight::get('lang.notes.postview_notexist'));
			Flight::render('alert2', array('title' => $this->get_title(), 'tpl'=>'notes_postview'));
		
		}
	
	}
	
	private function check_exists() {
		Flight::db_open();
		$count = Flight::db()->querySingle('SELECT COUNT(*) as count FROM posts WHERE pin="'.$this->id.'";');
		if($count==1) return true;
		return false;
	}
	
	private function get_title() {
		Flight::db_open();
		$title = Flight::db()->querySingle('SELECT title FROM posts WHERE pin="'.$this->id.'";');
		if(empty($title)) return Flight::get('lang.notes.postview_title').$this->id;
		else return Flight::get('lang.notes.postview_title').$title;
	}
	
	private function get_title2() {
		Flight::db_open();
		$title = Flight::db()->querySingle('SELECT title FROM posts WHERE pin="'.$this->id.'";');
		if(empty($title)) return $this->id;
		else return $title;
	}
	
	private function get_content() {
		Flight::db_open();
		$content = Flight::db()->querySingle('SELECT content FROM posts WHERE pin="'.$this->id.'";');
		if($content) Flight::set('notes_post_content',$content);
	}
	
	private function get_post($what) {
		Flight::db_open();
		$content = Flight::db()->querySingle('SELECT '.$what.' FROM posts WHERE pin="'.$this->id.'";');
		if($content) Flight::set('notes_post_'.$what,$content);
	}
	
	private function get_category() {
		Flight::db_open();
		$catID = Flight::db()->querySingle('SELECT category FROM posts WHERE pin="'.$this->id.'";');
		if(empty($catID)) Flight::set('notes_post_category', Flight::get('lang.default_category'));
		else {
			$catName = Flight::db()->querySingle('SELECT title FROM categories WHERE id="'.$catID.'";');
			if($catName) Flight::set('notes_post_category',$catName);
		}
	}
	
}