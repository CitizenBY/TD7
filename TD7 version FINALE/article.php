<?php


echo"<h4>".$articles[$i]['title']."</h4>";
echo"<div id='articles'><p>".$articles[$i]['content']."</p></div>";
echo"<p class='datee'>".$articles[$i]['date'];
echo "<br><a href='./home.php?username=".$articles[$i]['username']."'>@".$articles[$i]['username']."</a></p>";

if ($articles[$i]['username']==$_SESSION['user']){
    echo"<div><a href='./scripts/delete.php?username=".$articles[$i]['username']."&id=".$articles[$i]['id']."&origin=Art'><div class='deletebtn'>Delete</div></a>"; //à mettre à droite du titre
}



?>