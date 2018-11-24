<?php
    session_start();
    include_once(__DIR__."/../utils/userUtils.php");

    

    $username=$_SESSION['user'];
    $articleTitle=$_POST["articleTitle"];
    $articleContent=$_POST["articleContent"];
    var_dump($articleTitle);
    var_dump($articleContent);
    if(empty($articleTitle)){
        if(empty($articleContent)){
            header("Location:../home.php?new_post=True&title_fail=True&content_fail=True");//titre & contenu vide
            //echo "truc";
        }
        else{
            header("Location:../home.php?new_post=True&title_fail=True");//titre vide
            //echo "truc2";
        }
    }
    elseif(empty($articleContent)){
        header("Location:../home.php?new_post=True&content_fail=True");//contenu vide
        //echo "truc3";
    }
    else{
    // var_dump($articleTitle);
    // var_dump($articleContent);
    createArticle($username,$articleTitle,$articleContent);

    header("location: ../home.php?created=True");
    }
?>