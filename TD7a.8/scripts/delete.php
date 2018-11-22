<?php
include_once(__DIR__."/../utils/userUtils.php");
$id=$_GET['id'];
deleteArticle($id);
header("Location:../home.php");
?>