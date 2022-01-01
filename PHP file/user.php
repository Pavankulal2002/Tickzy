<?php
require_once('iuser.php');
require_once('../Database file/database.php');
class User extends Database implements iUser {

	public function loginUser($username, $password)
	{
		$sql = "SELECT *
				FROM user 
				WHERE username = ?
				AND password = ?;
		";
		return $this->getRow($sql, [$username, $password]);
	}//end loginUser

}//end class User

$user = new User();//instance
/* End of file User.php */
/* Location: .//D/xampp/htdocs/medallion/class/User.php */