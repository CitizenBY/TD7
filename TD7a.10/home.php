<?php
session_start();
include_once(__DIR__."/./utils/userutils.php"); 
//var_dump($_SESSION['user']);
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
        <li><a href="scripts/logout.php"><p>log-out</p></a></li>
        <li><a href="home.php?new_post=True"><p>New Post</p></a></li>
        <li><a href="home.php?profile=True"><p>@<?php echo $_SESSION['user']?></p></a></li>
        <li><a href="home.php"><p>Home</p></a></li>
        <h3> THE MIAGE BLOG </h3> 
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
                echo "<div class='profile'<p></p>";
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
       
        <form class="formcreate" action = ".\scripts\createArticle.php" method = "post">
            <div id="create">   
            <div class="case"><input type="text" name="articleTitle" placeholder="Article Title"></div>
            <p><textarea type="text" name = "articleContent" placeholder="Article Content" rows="20" cols="100"></textarea></p>
            <input id="sub_art" type ="submit" name = "createArticle" value = "Create Article"> 
            </div>
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
 </section>
</body>
</html>