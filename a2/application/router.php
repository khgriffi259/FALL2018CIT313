<?php 
   
    function myLoad($class) {
        if (file_exists('application/controllers/' . strtolower($class) . '.class.php')){
          include_once('application/controllers/' . strtolower($class) . '.class.php');
        }
        if (file_exists('application/models/' . strtolower($class) . '.class.php')){
          include_once('application/models/' . strtolower($class) . '.class.php');
        }
        if (file_exists('application/' . strtolower($class) . '.class.php')){
          include_once('application/' . strtolower($class) . '.class.php');
        }
      } 
      
      spl_autoload_register('myLoad');
    
    new Controller();
?>