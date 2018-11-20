<?php
include_once(__DIR__."/./scripts/getArticlesFromUser.php");
// var_dump($articles);
echo"<div>";
echo "<h3>".$articles[$i]['title']."</h3>";
echo"<p>".$articles[$i]['content']."</p>";
echo"<p>".$articles[$i]['date'];
echo"</div>";


$i +=1;
if ($i<$NumOfArt){
    include('./articleUser.php');
}

?>