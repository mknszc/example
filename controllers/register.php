<?php
class Register extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == true) {
			pageRedirect(DASHBOARDURL);
			exit();
		}
		$this->view->js = array('register.js');
	}
	
	public function index() {	
		$this->view->title = 'Register';
		$this->view->render('member/register');
	}
	
	public function save() {
		$this->model->save();
	}

}