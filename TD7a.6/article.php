<?php
include_once(__DIR__."/./scripts/getAllArticles.php");
// var_dump($articles);
echo"<div>";
echo "<h3>".$articles[$i]['title']."</h3>";
echo"<p>".$articles[$i]['content']."</p>";
echo"<p>".$articles[$i]['date'].$articles[$i]['username']."</p>";



$i +=1;
if ($i<$NumOfArt){
    include('./article.php');
}

?>