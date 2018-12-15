<?php

class ManageUsersController extends Controller{
	
	public $userObject;
  
	protected $access = "1";

   	public function users($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);	    
	  	$this->set('user',$user);
   	}
	
	public function index(){
		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'Manage Users');
		$this->set('users',$users);
	}
	
	public function approve(){
		
		$uID = $_POST['uID'];
		
		$this->userObject = new Users();
		$result=$this->userObject->approveUser($uID);
		$this->set('message',$result);
	}
	
	public function delete(){
		$uID = $_POST['uID'];
		$this->userObject = new Users();
		$result=$this->userObject->deleteUser($uID);
		$this->set('message',$result);
	}

}

?>