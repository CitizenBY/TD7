<?php
session_start();
session_destroy();
setcookie('user',null,0,'/');
header("location:../index.php");

?>