<?php 

class Dashboard extends Controller {
	
	public function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			pageRedirect(LOGINURL);
			exit();
		}
		$this->view->js = array('default.js');
	}
	
	public function index() {
		$this->view->title = 'Dashboard';
		$this->view->render('dashboard/index');
	}

	public function logout() {
		Session::destroy();
		pageRedirect(LOGINURL);
		exit();
	}
	
	public function ajaxInsert() {
		$this->model->ajaxInsert();
	}
	
}