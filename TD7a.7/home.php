<?php
session_start();
include_once(__DIR__."/./utils/userutils.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>HOME PAGE</title>
    

</head>
<body>
<header>
        <h3> THE MIAGE BLOG <h3>
        <div class="pagehead">
        <a href="home.php">Home</a>  
        <a href="home.php?profile=True">Profile</a>         
        <a href="">New Post</a>           
        <a href="scripts/logout.php">log-out</a> 
        </div>
    </header>
<?php
if(isset($_GET['username'])){
    $username=$_GET['username'];
    include_once(__DIR__."/./scripts/getArticlesFromUser.php");
    foreach ($articles as $i =>$article){
        include('./articleUser.php');
    }

}
elseif(isset($_GET['profile'])){
        $username=$_SESSION['user']; 
        $profile = getInfosFromUser($username);
        foreach ($profile as $key=>$info){
            echo $key." ";
            echo $info;
            echo "</p>";
        }


        include_once(__DIR__."/./scripts/getArticlesFromUser.php");
        foreach ($articles as $i =>$article){
            include('./articleUser.php');
        }
    }
else{
    var_dump($_SESSION["user"]);
    include_once(__DIR__."/./scripts/getAllArticles.php");
    foreach ($articles as $i =>$article){
        include('./article.php');
    }
}
?>

</body>
</html>