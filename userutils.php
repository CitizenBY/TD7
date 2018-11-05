<?php

function getAllArticles(){
    $mysql = connect();

  $query = "SELECT title, content, date
  FROM article";

  $req = $mysql->prepare($query);
  execute($req);

  $articles=array();

  while($row = $req->fetch()){
    $title = $row['title'];
    $content = $row['content'];
    $date = $row['date'];

    $article = array(
      "title" => $title,
      "content" => $content,
      "date" => $date
    );

    array_push($articles,$article);
  }

  return $id;
}
