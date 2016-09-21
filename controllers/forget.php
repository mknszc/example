<?php
class Forget extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == true) {
			pageRedirect(DASHBOARDURL);
			exit();
		}
		$this->view->js = array('forget.js');
	}
	
	public function index() {	
		$this->view->title = 'Forget';
		$this->view->render('member/forget');	
	}
	 
	public function check() {
		$this->model->check();
	}

}