<?php 

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

function myLoad($class){
    include_once('classes/'.strtolower($class).'.class.php');
}

spl_autoload_register('myload');

$newuser = new Registered_User('newuser', 'regular');

$newuser->first_name = $firstname;
$newuser->last_name = $lastname;
$newuser->email_address = $email;

function isRegisteredUser($user){
    if($user instanceof Registered_User){
        echo "The registered user's first name is: " . $user->first_name . "<br/>";
        echo "The registered user's last name is: " . $user->last_name . "<br/>";
        echo "The registered user's email is: " . $user->email_address . "<br/>";
        echo "<hr>";
        echo "Processing Complete";
    }
}

isRegisteredUser($newuser);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Results</title>
</head>
<body>
    
</body>
</html>