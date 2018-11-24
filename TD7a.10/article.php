<?php

// var_dump($articles);
echo"<h4>".$articles[$i]['title']."</h4>";
echo"<div id='articles'><p>".$articles[$i]['content']."</p></div>";
echo"<p class='datee'>".$articles[$i]['date'];
echo "<br><a href='./home.php?username=".$articles[$i]['username']."'>@".$articles[$i]['username']."</a></p>";

if ($articles[$i]['username']==$_SESSION['user']){
    echo"<div><a href='./scripts/delete.php?id=".$articles[$i]['id']."'><div class='deletebtn'>Delete</div></a>"; //à mettre à droite du titre
}

// $i +=1;
// if ($i<$NumOfArt){
//     include('./article.php');
// }

?>