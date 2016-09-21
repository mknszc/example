<?php 
class Help_Model extends Model {

	public function __construct() {
		parent::__construct();

	}

	public function other($args = false) {
		echo $args;
	}
	
	public function get($args = false) {
		echo $args;
	}
} 