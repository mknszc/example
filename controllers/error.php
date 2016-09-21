<?php
class Error extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->title = '404';
		$this->view->render('error/index');
	}

}