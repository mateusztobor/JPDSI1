<?php
	class lang {
		private $lang=array();
		
		public function set($field,$value) {
			$this->lang[$field] = $value;
		}
		
		public function get($field) {
			if(isset($this->lang[$field])) return $this->lang[$field];
			return "NULL";
		}
		
		public function getAll() {
			return $this->lang;
		}
	}