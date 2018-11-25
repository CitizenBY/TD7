
<?php



echo"<div class='static'>";
echo "<h4>".$articles[$i]['title']."</h4>";

if(isset($_GET['username'])){
    $username=$_GET['username'];
}
else{//si l'on accède à cet article par le profile
    $username=$_SESSION['user'];
}

if ($username==$_SESSION['user']){
    echo"<div><a href='./scripts/delete.php?username=".$username."&id=".$articles[$i]['id']."&origin=ArtUs'><div class='deletebtn'>Delete</div></a>";} //à mettre à droite du titre

echo"<div class='art'><p>".$articles[$i]['content']."</p></div>";
echo"<div class='date'>".$articles[$i]['date']."</div>";
echo"</div>";

?>

</body>
</html>