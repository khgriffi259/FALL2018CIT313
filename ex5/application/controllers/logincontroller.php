<?php

class LoginController extends Controller{
  
  protected $userObject;

    public function defaultTask(){
		
		// $this->userObject = new User();
		$this->set('task', 'do_login');
	
	
  }
  
  public function do_login(){
	   
  //handle login
  $this->userObject = new User();

  if($this->userObject->checkUser($_POST['email'], $_POST['password'])){
    
    $userInfo = $this->userObject->getUserFromEmail($_POST['email']);
    
    $_SESSION['uID'] = $userInfo['uID'];

    if (strlen($_SESSION['redirect']) > 0){
      $view = $_SESSION['redirect'];
      unset($_SESSION['redirect']);
      header('Location: ' . BASE_URL . $view);
    } 
    else {
      header('Location: ' . BASE_URL . 'index.php');
    }

    // header('Location: ' . BASE_URL . 'index.php');
  }else {
    $this->set('error','Wrong password / email combination');
  }	
}

public function logout(){
  unset($_SESSION['uID']);
  
  session_write_close();
  
  header('Location: ' . BASE_URL . 'index.php');
  }

}