<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'secret');
define('DB_NAME', 'php_crud');  

$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//$con = new mysqli('localhost', 'root', 'secret', 'php_crud');

if($con -> connect_error){
    die('Connect_Error:'.($con -> connect_error));
} 

//if(!$con){
  //  die(mysqli_error($con));
//}else

?>