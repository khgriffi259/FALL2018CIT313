<?php

class RegisterController extends Controller{
	
	public $postObject;
	
	public function defaultTask(){
		
		$this->postObject = new User();
		$this->set('task', 'add');
	
	
	}
	
	public function add(){
		
			$this->userObject = new User();
			
			$data = array(	'first_name'=>$_POST['first_name'],
							'last_name'=>$_POST['last_name'], 
							'email'=>$_POST['email'],
							'password' =>$_POST['password'],
							'uID' =>$_POST['uID']);

			$result = $this->userObject->addUser($data);
			
			$this->set('message', $result);
			
		
	}
	
	
}
