<?php
class User extends Model{
	

	// Constructor
	public function __construct(){
		parent::__construct();
		}

	function getUser($uID){
		
		$sql =  'SELECT uID, email, first_name, last_name FROM users WHERE uID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($uID));
		
		$user = $results;
	
		return $user;
	
	}
		
	public function getAllUsers($limit = 0){
		
		if($limit > 0){
			
			$numusers = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT * FROM users'.$numusers;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;
	
	}
	
	public function addUser($data){
		
		$sql='INSERT INTO users (first_name,last_name,email,password) VALUES (?,?,?,?)'; 
		$sql='INSERT INTO users (first_name,last_name,email,password) VALUES (?,?,?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
		
	}

	public function checkUser($email, $password){
		
		$sql = "SELECT email, password FROM users WHERE email = ?";
		$results = $this->db->getrow($sql, array($email));

		var_dump($results);

		// $user = $results;
		//user's password is stored in 2nd index of results array
		$password_db = $results[1];

		if(password_verify($password, $password_db)){
			return true;
		}else{
			return false;
		}
	}
		
}