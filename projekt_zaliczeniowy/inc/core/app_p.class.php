<?php
	class app_p {
		private $db;
		
		public function init($db) {
			$this->db = $db;
		}
		
		public function post_isset() {
			$count = $this->db->querySingle('SELECT COUNT(*) as count FROM posts WHERE pin="'.htmlspecialchars($_GET['id']).'";');
			if($count > 0) return true;
			return false;
		}
		
		public function post_content() {
			$post = $this->db->querySingle('SELECT content FROM posts WHERE pin="'.htmlspecialchars($_GET['id']).'";');
			if($post) return $post;
			return "NULL";
		}
		
	}