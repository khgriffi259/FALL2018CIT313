<?php 
    class User extends Model
    {
        public function __construct()
        {
            parent::__construct();
            
        }
        public function __set($name, $value)
        {
            $this->$name = $value;
            return;
        }
        public function __get($name)
        {
            return $this->$name;
        }
    
        public function __destruct()
        {
        }
        
        //get model variables 
        function getName(){
            return array(   
                'userID'=>$this->userID,
                'firstname'=>$this->firstname,
                'lastname'=>$this->lastname,
                'email'=>$this->email,
                'role'=>$this->role
            );
        }
    } 


?>