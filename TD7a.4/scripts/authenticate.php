<?php
include_once(__DIR__."/../utils/userUtils.php");
$username=$_POST['username'];
$password=$_POST['password'];
$status = Connection($username,$password);
var_dump($status);
// header("Location :"__DIR__."./../index.php");


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