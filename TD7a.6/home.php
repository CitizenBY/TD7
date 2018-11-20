<?php include_once(__DIR__."/./utils/userutils.php"); ?>
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
elseif(isset($_GET['profile'])){
        //$username=$_SESSION['username']; //A FAIRE AVEC LES SESSIONS
        $profile = getInfosFromUser('jdoe');
        foreach ($profile as $key=>$info){
            echo $key." ";
            echo $info;
            echo "</p>";
        }
    }
else{
$i=0;
include('./article.php');
}
?>

</body>
</html>