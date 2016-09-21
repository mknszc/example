<?php
class Product extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		$role = Session::get('role');
		
		if ($logged == false || $role != 1) {
			pageRedirect(ERRORURL);
			exit;
		}
		$this->view->css = array('card.css','main(2).css');
		$this->view->js = array('check.js','card.js','jquery.card.js');

	}
	
	public function index() {	
		$this->view->title = 'Product';
		$this->view->render('product/index');
		
	}
}