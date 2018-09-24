<?php 
// include_once("./classes/user.class.php");
// include_once("./classes/registered.class.php");
// include_once("./classes/admin.class.php");

function myLoad($class){
    include_once('classes/'.strtolower($class).'.class.php');
}

spl_autoload_register('myload');

$registered_user = new Registered_User('Regular User', 'kyhgriff');
$admin_user = new Admin_User('Administrator', 'lynnable');

$registered_user->first_name = "Kyle";
$registered_user->last_name = "Griffin";
$registered_user->email_address = "kyhgriff@iu.edu";

$admin_user->first_name = "Lynn";
$admin_user->last_name = "Venable";
$admin_user->email_address = "Lynnerd@iu.edu";


echo 'User Level: ' . $registered_user->user_level . '<br/>';
echo 'Registered User ID: ' . $registered_user->user_id . '<br/>';
echo 'Registered User Type: ' . $registered_user->user_type . '<br/>';
echo 'Registered First Name: ' . $registered_user->first_name . '<br/>';
echo 'Registered Last Name: ' . $registered_user->last_name . '<br/>';
echo 'Registered Email: ' . $registered_user->email_address . '<br/>';
echo '<hr>';
echo 'User Level: ' . $admin_user->user_level . '<br/>';
echo 'Admin User ID: ' . $admin_user->user_id . '<br/>';
echo 'Admin User Type: ' . $admin_user->user_type . '<br/>';
echo 'Admin First Name: ' . $admin_user->first_name . '<br/>';
echo 'Admin Last Name: ' . $admin_user->last_name . '<br/>';
echo 'Admin Email: ' . $admin_user->email_address . '<br/>';
echo '<hr>';
$test = Admin_User::addNumbers(2,2);
echo 'The result is '.$test;
echo '<hr>';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <a href="registration_form.php">Registration Form</a>
</body>
</html>