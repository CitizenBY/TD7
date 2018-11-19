<?php
include_once(__DIR__."/../utils/userUtils.php");
$username=$_POST['username'];
$password=$_POST['password'];
$wrong = Connection($username,$password);
echo $wrong;

// try{
//     login($username,$password);
//     header("location:../index.php");
//     exit();
// }
// catch(Exception $ex){
//     $msg=$ex->getMessage();
//     $error=urlencode($msg);
//     header("location: index.php?error=$error");
 
//     exit();
    
// }
// $errors=checkParameters($username,$password);
// if($erros==false){
//     header("location: index.php?errors=parameters");
//     exit();
// }

// ?>