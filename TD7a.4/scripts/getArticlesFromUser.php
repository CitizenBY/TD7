<?php
include_once(__DIR__."/../utils/userUtils.php");
$articles=getArticlesFromUser($username);
$NumOfArt = count($articles);
?>