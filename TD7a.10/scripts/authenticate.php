<?php
session_start();
include_once(__DIR__."/../utils/userUtils.php");
$username=$_POST['username'];
$password=$_POST['password'];
$status = connection($username,$password);
if($status==0){
    echo "</h4>wrong password or username</h4>";
}
elseif($status==1){
    //echo("bon mdp");
    header("Location:../home.php");
}




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