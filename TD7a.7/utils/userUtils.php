<?php

include_once(__DIR__."/./dbUtils.php");

function userExists($username,$password) { //vérifie si l'user est dans la BDD retourne un booléen
    $mysql = connect();
    $query="SELECT firstname, lastname
    FROM user
    WHERE  username=:username AND password=:password";
    $req = $mysql->prepare($query);
    $data = array(
      "username" => $username,
      "password" => $password
    );
    execute($req,$data);
     while($row = $req->fetch()) {
       $firstname = $row["firstname"];
       $lastname = $row["lastname"];
       $user = array(
         "firstname" => $firstname,
         "lastname" => $lastname
        );
      }
      if (!empty($user)) {
        return true;
      }
      else {
        return false;
      }
  }

function isLoggedIn() { //si l'utilisateur est connecté ou pas
  if(isset($_SESSION["user"])) {
    return true;
  }
  else{
  return false;
  }
}

function connection($username,$password){ //connecte l'utilisateur
    if(!userExists($username,$password)){
        // throw new Exception("wrong username or password($username,$password)");
        return 0;
    }

    else{
     //setcookie("user", $username, time() + 3600 * 24 * 7, "/", "", false, true);
     $_SESSION["user"] = $username;
      return 1;
    }
}


function getAllArticles(){//récupère tous les articles
    $mysql = connect();

    $query = "SELECT title, content, date, username
    FROM article A
    LEFT JOIN user U
    ON A.user_id = U.id
    ORDER BY date desc";

  $req = $mysql->prepare($query);
  execute($req);

  $articles=array();

  while($row = $req->fetch()){
    $title = $row['title'];
    $content = $row['content'];
    $date = $row['date'];
    $username = $row['username'];

    $article = array(
      "title" => $title,
      "content" => $content,
      "date" => $date,
      "username" => $username
    );

    array_push($articles,$article);
  }

  return $articles;
}

function getArticlesFromUser($username){//récupère tous les articles d'un seul user
  $mysql = connect();

$query = "SELECT title, content, date
FROM article A
LEFT JOIN user U
ON A.user_id = U.id
WHERE username=:username
ORDER BY date desc";

$req = $mysql->prepare($query);
$data = array("username" => $username);

execute($req,$data);

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

return $articles;
}

function getInfosFromUser($username){//récupère les informations de l'utilisateur
  $mysql = connect();

$query = "SELECT username,firstname,lastname,email,phone,gender FROM user 
WHERE username=:username";

$req = $mysql->prepare($query);
$data = array("username" => $username);
execute($req,$data);


while($row = $req->fetch()){
  $username = $row['username'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $email = $row['email'];
  $phone = $row['phone'];
  $gender = $row['gender'];

  $user = array(
    "username" => $username,
    "firstname" => $firstname,
    "lastname" => $lastname,
    "email" => $email,
    "phone" => $phone,
    "gender" => $gender
  );

}

return $user;
}

function addUser($username,$password,$firstname,$lastname,$phone,$email,$gender){//enregistre un nouvel user dans la BDD
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

function usernameExists($username) {//regarde si l'username est déjà pris
  $mysql = connect();
  $query="SELECT firstname, lastname
  FROM user
  WHERE  username=:username";
  $req = $mysql->prepare($query);
  $data = array(
    "username" => $username
  );
  execute($req,$data);
   while($row = $req->fetch()) {
     $firstname = $row["firstname"];
     $lastname = $row["lastname"];
     $user = array(
       "firstname" => $firstname,
       "lastname" => $lastname
      );
    }
    if (!empty($user)) {
      return true;
    }
    else {
      return false;
    }
}

