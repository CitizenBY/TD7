<?php

// var_dump($articles);
echo"<div>";
echo "<h3>".$articles[$i]['title']."</h3>";
if ($articles[$i]['username']==$_SESSION['user']){
    echo"<a href='./scripts/delete.php?id=".$articles[$i]['id']."'>Delete</a>"; //à mettre à droite du titre
}
echo"<p>".$articles[$i]['content']."</p>";
echo"<p>".$articles[$i]['date'];
echo "<a href='./home.php?username=".$articles[$i]['username']."'>".$articles[$i]['username']."</a></p>";
echo"</div>";



// $i +=1;
// if ($i<$NumOfArt){
//     include('./article.php');
// }

?>