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
