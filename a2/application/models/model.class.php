<?php 
abstract class Model{
    
    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;

    public function __construct()
    {
        // we will revisit this later
        
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
} 
?>