
<?php

// var_dump($articles);
echo"<div>";
echo "<h3>".$articles[$i]['title']."</h3>";


if ($username==$_SESSION['user']){
    echo"<a href='./scripts/delete.php?id=".$articles[$i]['id']."'>Delete</a>"; //à mettre à droite du titre
} //à mettre à droite du titre

echo"<p>".$articles[$i]['content']."</p>";
echo"<p>".$articles[$i]['date'];
echo"</div>";


?>

</body>
</html>