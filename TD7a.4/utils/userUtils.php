<?php
session_start();
include_once(__DIR__."/./dbUtils.php");
function userExists($username,$password) {
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
function isLoggedIn() {
  if(isset($_SESSION["user"])) {
    return true;
  }
  else{
  return false;
  }
}

function Connection($username,$password){
    if(!userExists($username,$password)){
        // throw new Exception("wrong username or password($username,$password)");
        return "wrong password or username";
    }

    else{
      // setcookie("user", $username, time() + 3600 * 24 * 7, "/", "", false, true);
      $_SESSION["user"] = $username;
      return "victoire";
    }

}


function getAllArticles(){
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

function getArticlesFromUser($username){
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

function getInfosFromUser(){
  $mysql = connect();

$query = "SELECT username,firstname,lastname,email,phone,gender FROM user 
WHERE username=$username";

$req = $mysql->prepare($query);
execute($req);

$users=array();

while($row = $req->fetch()){
  $username = $row['username'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $email = $row['email'];
  $phone = $row['phone'];
  $gender = $row['gendrer'];

  $user = array(
    "username" => $username,
    "firstname" => $firstname,
    "lastname" => $lastname,
    "email" => $email,
    "phone" => $phone,
    "gender" => $gender
  );

  array_push($users,$user);
}

return $users;
}