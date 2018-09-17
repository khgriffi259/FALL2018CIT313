<?php
class User
{
    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;
    protected $user_level;

    public function __construct($level)
    {
        $this->user_level = $level;
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
}