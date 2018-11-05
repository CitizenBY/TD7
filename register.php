<?php 
include_once(_DIR_."/../Utils/userutils.php");
$Firstname=$_POST["Firstname"];
$Lastname=$_POST["Lastname"]; $Password=$_POST["Password"];
$Email=$_POST["E-mail"];$Phone_Number=$_POST["Phone_Number"];
$Gender=$_POST["Gender"];
addUser($Firstname,$Lastname,$Password,$Email,$Phone_Number,$Gender);
?>