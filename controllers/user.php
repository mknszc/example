<?php
class User extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		$role = Session::get('role');
		
		if ($logged == false || $role != 1) {
			pageRedirect(ERRORURL);
			exit;
		}		
	}
	
	public function index() {	
		$this->view->title = 'User';
		$this->view->render('user/index');
		
	}
}