
<?php

// var_dump($articles);
echo"<div class='static'>";
echo "<h4>".$articles[$i]['title']."</h4>";


if ($username==$_SESSION['user']){
    echo"<li><a href='./scripts/delete.php?id=".$articles[$i]['id']."'><p>Delete</p></a></li>"; //à mettre à droite du titre
} //à mettre à droite du titre

echo"<div class='art'><p>".$articles[$i]['content']."</p></div>";
echo"<div class='date'>".$articles[$i]['date']."</div>";
echo"</div>";

?>

</body>
</html>