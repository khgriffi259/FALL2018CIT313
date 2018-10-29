<?php

class LoginController extends Controller{
  
  protected $userObject;

    public function defaultTask(){
		
		$this->userObject = new User();
		$this->set('task', 'do_login');
	
	
  }
  
  public function do_login(){
	   
  //handle login
  $this->userObject = new User();

  if($this->userObject->checkUser($_POST['email'], $_POST['password'])){
    
    $userInfo = $this->userObject->getUserFromEmail($_POST['email']);
    
    $_SESSION['uID'] = $userInfo['uID'];

    header('Location: ' . BASE_URL . 'index.php');
    }else {
      $this->set('error','Wrong password / email combination');
    }	
  }
}