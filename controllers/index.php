<?php
class Index extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$this->view->title = 'İndex';
		$this->view->render('index/index');
	
	}
	
	public function details() {
		$this->view->render('index/index');
	}
}