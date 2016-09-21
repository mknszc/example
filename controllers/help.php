<?php
class Help extends Controller {

	public function __construct() {
		parent::__construct();
		
	}
	
	public function index() {
		$this->view->title = 'Help';
		$this->view->render('help/index');	
	}

	public function other($args = false) {
		$this->view->title = 'Other';
		$this->view->render('help/index');
		$this->model->other($args);

	}
	
	public function get() {
		$this->view->title = 'Get';
		$this->view->render('help/get');
		$this->model->get();
	}
	
	
}