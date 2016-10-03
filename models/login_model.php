<?php
class Login_Model extends Model {
	public function __construct() {
		parent::__construct();
	}

	private function checkUser($username, $password) {
		$array = array(
			':username' => $username,
			':password' => Hash::create('sha256', $password, HASH_PASSWORD_KEY)
		);
		$data = $this->db->select("SELECT id, name, surname, role FROM users
						WHERE username = :username AND password = :password", $array );
		return $data;
	}
	
	public function run() {
		if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') {
			if (isset($_POST['username']) && isset($_POST['password'])) {
				/*$array = array(
					':username' => $_POST['username'],
					':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
				);
				$data = $this->db->select("SELECT id, name, surname, role FROM users 
				WHERE username = :username AND password = :password", $array );
				*/   
				$data = self::checkUser($_POST['username'], $_POST['password']);
				if ($data['id'] > 0 ) {
					Session::init();
					Session::set('loggedIn', true);
					Session::set('role', $data['role']);
					Session::set('name', $data['name']);
					Session::set('surname', $data['surname']);
					if (isset($_POST['RememberMe'])) {
						$_COOKIE['username'] = $_POST['username'];
						$_COOKIE['password'] = $_POST['password'];
					}
					echo 0; 
				}
				else {
					echo 1;
				}
			}
			else {
				echo 2;
			}
		}
		else {
			pageRedirect(ERRORURL);
		}
	}
	
}
