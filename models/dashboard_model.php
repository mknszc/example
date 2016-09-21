<?php 
class Dashboard_Model extends Model {

   function __construct() {
		parent::__construct();
   }
   
   function ajaxInsert() {
	    if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') {
			if (isset($_POST['username'])) {
				$data = array(
				'username' => '4',
				'password' => Hash::create('sha256', '3' , HASH_PASSWORD_KEY)
				);
				 $this->db->insert('users', $data);
				 $this->db->update('users', $data , 'username = 3' );
				 $last = $this->db->select('SELECT id, role FROM users WHERE username = :username AND password = :password', $data, 1);
				 print_r($last);
			}
		}
		else {
			pageRedirect(ERRORURL); 
		}
   }

}