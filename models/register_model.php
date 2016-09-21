<?php
class Register_Model extends Model {

	public function __construct() {
		parent::__construct();
	}
	
	private function checkEmail($email) {
		$smtp = $this->db->select("SELECT id FROM users WHERE email = :email", array(':email' => $email));
		if ( $smtp['id'] > 0 ) {return false;} else {return true;}	
	}
	
	private function checkUsername($username) {
		$smtp = $this->db->select("SELECT id FROM users WHERE username = :username", array(':username' => $username));
		if ( $smtp['id'] > 0 ) {return false;} else {return true;}
		
	}
	
	private function saveUser($name, $surname, $email, $username, $password) {
		$data = array(
					'name' => $name,
					'surname' => $surname,
					'email' => $email,
					'username' => $username,
					'password' => Hash::create('sha256', $password, HASH_PASSWORD_KEY)
				);
		$smtp = $this->db->insert('users', $data);
		if ($smtp) {return true;} else {return false;}
	}
	
	public function save() {
		if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') {
			if (self::checkUsername($_POST['username'])) {
				if (self::checkEmail($_POST['email'])) { 
					if (self::saveUser($_POST['name'], $_POST['surname'], $_POST['email'],
									   $_POST['username'], $_POST['password'])) {
						echo 0;
					}
					else {echo 1;}	
				}
				else {echo 2;}
			}
			else {echo 3;}
		}
		else {pageRedirect(ERRORURL);}	
	} 
}