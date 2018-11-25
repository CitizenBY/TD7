<?php
    session_start();
    include_once(__DIR__."/../utils/userUtils.php");

    $username=$_SESSION['user'];
    $articleTitle=$_POST["articleTitle"];
    $articleContent=$_POST["articleContent"];

    createArticle($username,$articleTitle,$articleContent);

    header("location: ../home.php?created=True");
    
?>