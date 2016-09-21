<?php
class Forget_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	private function checkEmail($email) {
		$smtp = $this->db->select("SELECT id FROM users WHERE email = :email", array(':email' => $email));
		if ( $smtp['id'] > 0 ) {return true;} else {return false;}	
	}
	
	public function check() {
		if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') {
			if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['check']) && empty($_POST['check']))) {
				if (self::checkEmail($_POST['email'])) {
					echo 1;
				}
				else {
					echo "Böyle Bir Kayıt Yok";
				}
			}
			else if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['check']) && !empty($_POST['check']))) {
				echo createPassword();
			}
		}
		else {
			pageRedirect(ERRORURL);
		}
	} 
}