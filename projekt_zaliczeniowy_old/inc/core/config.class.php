<?php
	class config {
		private $config=array();
		
		public function set($field,$value) {
			$this->config[$field] = $value;
		}
		
		public function get($field) {
			if(isset($this->config[$field])) return $this->config[$field];
			return "NULL";
		}
	}