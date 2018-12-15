<?php
class Users extends Model{
	
	public $uID;
    public $first_name;
    public $last_name;
    public $email;
    protected $user_type;
    protected $active;


	// Constructor
	public function __construct(){
		parent::__construct();

        if(isset($_SESSION['uID'])) {

            $userInfo = $this->getUserFromID($_SESSION['uID']);

            $this->uID = $userInfo['uID'];
            $this->first_name = $userInfo['first_name'];
            $this->last_name = $userInfo['last_name'];
            $this->email = $userInfo['email'];
            $this->user_type = $userInfo['user_type'];
            $this->active = $userInfo['active'];

        }

    }

    public function getFirstName() {
        return $this->first_name;
    }
    public function getLastName() {
        return $this->last_name;
    }
    public function getUserName() {
        return $this->first_name. ' ' . $this->last_name;
    }
    
    public function getUserID() {
        return $this->uID;
    }
    
    public function getEmail () {
        return $this->email;
    }

    public function isRegistered() {
        if(isset($this->user_type)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function isAdmin() {
           if($this->user_type == '1') {
               return true;
           }
            else {
                return false;
            }
    }
    public function isActive($uID) {
           
        $user = $this->getUserFromID($uID);
        if($user['active'] == '1') {
            return true;
        }
        else {
            return false;
        }
    }
    
    

	public function getUser($uID){
		$sql = 'SELECT uID, first_name, last_name, email, password FROM users WHERE uID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($uID));
		$user = $results;
		return $user;
	}
		
	public function getAllUsers($limit = 0){
		if($limit > 0){
			$numusers = ' LIMIT '.$limit;
		}
		$sql = 'SELECT * FROM users'.$numusers;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;
	}
	
	public function addUser($data){
		$sql = 'INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
	}

    public function checkUser($email, $password) {

        $sql = "SELECT email, password FROM users WHERE email = ?";

        $results = $this->db->getrow($sql, array($email));


        $user = $results;

        $password_db = $user[1];

        if(password_verify($password,$password_db)) {
            return true;
        }
        else {
            return false;
        }

    }

    public function getUserFromEmail($email) {

        $sql = 'SELECT * FROM users WHERE email = ?';

        $results = $this->db->getrow($sql, array($email));


        $user = $results;

        return $user;

    }

    public function getUserFromID($uID) {

        $sql = 'SELECT * FROM users WHERE uID = ?';
        $results = $this->db->getrow($sql, array($uID));

        $user = $results;

        return $user;

    }

    public function approveUser($uID){
        $sql = 'UPDATE users SET active = 1 where uID = ?';
        $this->db->execute($sql, $uID);
        $message = "User account approved.";
        return $message;

    }
    
    public function deleteUser($uID){
        $sql='DELETE FROM users WHERE uID = ?';
        // $debug =1;
        // if($debug){
        //     echo '<script> alert('. $data['pID'] . ');</script>';
        // }
        
        $this->db->execute($sql,$uID);
        $message = 'User deleted.';
        return $message;

    }
    
    public function updateUser($data){
        $sql = 'UPDATE users SET first_name = ?, last_name = ?, email = ? WHERE uID = ?';
        $this->db->execute($sql, $data);
        $message = "User updated.";
        return $message;

    }

}