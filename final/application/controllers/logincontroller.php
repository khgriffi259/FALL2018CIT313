<?php

class LoginController extends Controller{

   protected $userObject;
   
    public function index() {
        // $userObject = new Users();
        $this->set('task', 'do_login');
    }

   public function do_login() {
	   // handle login

       $this->userObject = new Users();
       
       if($this->userObject->checkUser($_POST['email'],$_POST['password'])) {
        
            // if email and password is verified, retrieve the userinfo
           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

        //    $debug =1;
        //    if($debug){   
        //        echo '<script> alert('. $userInfo['uID'] . ');</script>';
        //    }

        //    check if userinfo active value is 1 and login if true

            if($this->userObject->isActive($userInfo['uID'])){
               
               $_SESSION['uID'] = $userInfo['uID'];
               
               if(strlen($_SESSION['redirect']) > 0 ) {
                   $view = $_SESSION['redirect'];
                   unset($_SESSION['redirect']);
                   header('Location: '.BASE_URL.$view);
                }
                else {
                    header('Location: '.BASE_URL);
                }
            }
            else {
                // return error message that account is not approved
                $this->set('error','Your account is awaiting approval.');

            }


       }
       else {
           $this->set('error','Wrong password / email combination');
       }

   }

    public function logout() {

    //unset the session id
        unset($_SESSION['uID']);

    // close the session
        session_write_close();

    // send to the homepage
        header('Location: '.BASE_URL);

    }
	
}