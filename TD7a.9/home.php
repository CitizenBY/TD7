<?php
session_start();
include_once(__DIR__."/./utils/userutils.php"); 
var_dump($_SESSION['user']);
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
        <div class="pagehead">
        <a href="scripts/logout.php">log-out</a>
        <a href="home.php?new_post=True">New Post</a> 
        <a href="home.php?profile=True">@<?php echo $_SESSION['user']?></a> 
        <a href="home.php">Home</a> 
        <p> THE MIAGE BLOG </p> 
        </div>
    </header>
 
    <section>

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
        <div id="create_article">
        <form action = ".\scripts\createArticle.php" method = "post">
                
            <input name="articleTitle" placeholder="Article Title"></p>
            <textarea name = "articleContent" placeholder="Article Content" rows="6" cols="40"></textarea></p>
            <input type ="submit" name = "createArticle" value = "Create Article"> 
        </form>
        </div>

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
 </section>
</body>
</html>