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

function addUser($username,$password,$firstname,$lastname,$phone,$email,$gender){
  $mysql=connect();

  $query="INSERT INTO user(username,password,firstname,lastname,phone,email,gender)
  VALUES(:username, :password, :firstname, :lastname, :phone, :email, :gender)";

  $req = $mysql->prepare($query);
  $data = array(
    "username" => $username,
    "password" => $password,
    "firstname" => $firstname,
    "lastname" => $lastname,
    "phone" => $phone,
    "email" => $email,
    "gender" => $gender
  );
  execute($req,$data);

}
