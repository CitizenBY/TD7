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
        <a href="home.php?new_post=True">New Post</a>           
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
elseif(isset($_GET['new_post'])){

    if(isset($_GET['title_fail'])){
        echo"<p>Please fill in the title</p>";
    }
    if(isset($_GET['content_fail'])){
        echo"<p>Please fill in the content</p>";
    }
?>       
    <form action = ".\scripts\createArticle.php" method = "post">
            
        <input name="articleTitle" placeholder="Article Title"></p>
        <textarea name = "articleContent" placeholder="Article Content" rows="6" cols="40"></textarea></p>
        <input type ="submit" name = "createArticle" value = "Create Article"> 
        
    </form>
<?php
}

else{
    if(isset($_GET['created']))
    {
        echo "<p>Congratulations ! Your article has been created !</p>";
    }
    //var_dump($_SESSION["user"]);
    include_once(__DIR__."/./scripts/getAllArticles.php");
    foreach ($articles as $i =>$article){
        include('./article.php');
    }
}
?>

</body>
</html>