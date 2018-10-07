<?php 
    class User extends Model
    {
        public function __construct()
        {
            parent::__construct();
            
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
        
        //get model variables 
        function getName(){
            return array(   
        
                'id'=>$this->userID,
                'first'=>$this->firstname,
                'last'=>$this->lastname,
                'useremail'=>$this->email,
                'userrole'=>$this->role
            );
        }
    } 


?>