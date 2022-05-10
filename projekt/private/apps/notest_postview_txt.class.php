<?php
class notes_postview_txt_controller {
	private $id;
	
	public function __construct($id) {
		$this->id = $id;
		Flight::set('notes_post_id',$id);
		$this->get_post_('share');
		$this->get_post_('author');
	}
	
	public function view() {
		if($this->check_exists()) {
			if(!Flight::get('notes_post_share') && Flight::get('notes_post_author') == Flight::get('user.id') || Flight::get('notes_post_share') || Flight::get('user.type') == 2) {
				header('Content-Type:text/plain; charset=UTF-8');
				$this->print_post();
			}
		}
	}
	
	private function check_exists() {
		Flight::db_open();
		$count = Flight::db()->querySingle('SELECT COUNT(*) as count FROM posts WHERE pin="'.$this->id.'";');
		if($count==1) return true;
		return false;
	}
	
	private function get_post_($what) {
		Flight::db_open();
		$content = Flight::db()->querySingle('SELECT '.$what.' FROM posts WHERE pin="'.$this->id.'";');
		if($content) Flight::set('notes_post_'.$what,$content);
	}
	
	private function print_post() {
		Flight::db_open();
		$content = Flight::db()->querySingle('SELECT content FROM posts WHERE pin="'.$this->id.'";');
		if($content) echo $content;
	}
}