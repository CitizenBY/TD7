<?php
session_start();
include_once(__DIR__."/../Utils/userutils.php");
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];


 if (usernameExists($username)){
    header("Location: ../index.php?signup=True&taken=True"); //A FAIRE AVEC TRY CATCH
 }
addUser($username,$password,$firstname,$lastname,$phone,$email,$gender);
connection($username,$password);
header("Location:../home.php");
?>