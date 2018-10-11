<?php 
    class Controller {
        public $load;
        public $user;
        
        function __construct(){
            $this->load = new Load();
            $this->user = new User();
            $this->home();
        }
        public function __set($name, $value)
        {
    
        }
        public function __get($name)
        {
    
        }
    
        public function __destruct()
        {
        }

        function home(){
            
            // set model variables             
            $this->user->userID = 'kyhgriff';
            $this->user->firstname = 'Kyle';
            $this->user->lastname = 'Griffin';
            $this->user->email = 'kyhgriff@iu.edu';
            $this->user->role = 'user';

            //get data from model 
            $data = $this->user->getName();
            // var_dump($data);
            // die();
            // load view and pass data to view
            $this->load->view('view.php',$data);
        }
    }
?>