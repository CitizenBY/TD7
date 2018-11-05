<?php
    include_once "./data/users.php";
    include_once "./services/UserService.php";

    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    $errors = checkParameters($username, $password);    
    if($errors == false){
       
        header('Location: index.php?errors=parameters');    
        exit();
    }

    
    $errors = checkUsernameInDatabase($username, $password, $users);    
    if($errors == false){
        
        header('Location: index.php?errors=db');
        exit();   
    }

    $user = $users[$username];
    signIn($user);
    header('Location: usersinfos.php');
    exit();
?>