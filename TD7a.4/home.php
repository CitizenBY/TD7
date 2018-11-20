<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>HOME PAGE</title>
    
    <header>
        <h3> THE MIAGE BLOG <h3>
        <div class="pagehead">
        <a href="">Home</a>  
        <a href="home.php?profile=True">Profile</a>         
        <a href="">New Post</a>           
        <a href="">log-out</a> 
        </div>
    </header>
</head>
<body>
<?php
if(isset($_GET['username'])){
    $username=$_GET['username'];
    $i=0;
    include('./articleUser.php');

}
else{
if(isset($_GET['profile'])){
    $username=$_GET['username'];
    getInfosFromUsers($username);
    }
$i=0;
include('./article.php');
}
// if(isset($_GET['profile'])){
//     $username=$_GET['username']; A FAIRE AVEC LES SESSIONS
//     getInfosFromUser($username);
//   }
?>
FIN DE PAGE
</body>
</html>