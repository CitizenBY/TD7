<?php
session_start();
include_once(__DIR__."/../utils/userUtils.php");
$username=$_POST['username'];
$password=$_POST['password'];
$status = connection($username,$password);
if($status==0){
    header("Location:../index.php?wrong=True");
}
elseif($status==1){
    header("Location:../home.php");
}



 ?>