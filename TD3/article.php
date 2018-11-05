<?php 
    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    
</head>
<body>
<h2> ARTICLE: <h2>
   <form method="post" action="article.php"/>
   <input type="text" name="title" placeholder="Title of the article"/></br>
   <textarea type="text" name="article" placeholder="ARTICLE"></textarea></br>
   <input type="submit" name="create" value="Create"/></br>
   <input type="submit" name="delete" value="Delete"/></br>

</body>
</html>