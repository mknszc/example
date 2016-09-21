<?php
class Login extends Controller {

	public function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == true) {
			pageRedirect(DASHBOARDURL);
			exit();
		}
		$this->view->js = array('login.js');
	}
	
	public function index() {	
		$this->view->title = 'Login';
		$this->view->render('member/login');	
	}
	
	public function run() {
		$this->model->run();
	}

}