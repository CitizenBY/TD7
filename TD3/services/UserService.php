<?php

    
    function signIn($user) {
        session_start();
        $_SESSION["user"] = $user;
    }

    function getUserInfo()  { 
        
        $info=$_SESSION['user'];
        return $info ;  

    }

    
    function logout(){
            session_start();
            unset($_SESSION['user']);
            session_destroy();
    }

    function checkParameters($username, $password){
        $response = true;
        if(empty($username) == true){
            $response = false; 
        }
        else if(empty($password) == true){
            $response = false;
        }
        return $response;
    }

    
    function checkUsernameInDatabase($username, $password, $users){
        $response = false;
        if(empty($users[$username]) == false && $users[$username]["password"] == $password ){ 
            
            $response = true;
        }
        return $response;
    }

?>

