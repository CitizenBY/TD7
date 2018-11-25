
<?php
session_start();
include_once(__DIR__."/../utils/userUtils.php");

$username=$_GET['username'];


if($_SESSION['user']!=$username){//si l'article n'a pas été créé par l'utilisateur actuellement connecté
    header("Location:../home.php");
    
}

else{
    
    $id=$_GET['id'];
    deleteArticle($id);
    if($_GET['origin']="Art"){
        header("Location:../home.php");
        
    }
    elseif($_GET['origin']="ArtUs"){
        header("Location:../home.php?username=".$username);
    }
}
?>  
