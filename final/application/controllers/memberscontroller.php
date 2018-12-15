<?php

class MembersController extends Controller{
	
	public $userObject;
  
   	public function users($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);	    
	  	$this->set('user',$user);
   	}
	
	public function index(){
		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);
	}
	
	public function updateProfile(){
		// if password length and confirm password length are greater than zero load every field else load first name last name and email into array

		if($_POST['password'] && $_POST['confirmpassword']){
			$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$_POST['password'],'uID'=>$_POST['uID']);
		}else{
				$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'uID'=>$_POST['uID']);
			}
			
		$this->userObject = new Users();
		$result = $this->userObject->updateUser($data);
		$this->set('message',$result);

			// $debug=1;
			// if($debug){
			// 	echo '<script> alert("no pass");</script>';
			// }
		
	}

}

?>


