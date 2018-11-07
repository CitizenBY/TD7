<?php
    include_once(__DIR__."./utils/userUtils.php");
    session_start();
    $errors = "";
    if(empty($_GET["errors"]) == false && $_GET["errors"] == "parameters"){
        $errors = "Veuillez renseigner le username et/ou le password";
    }
    else if(empty($_GET["errors"]) == false && $_GET["errors"] == "db"){
        $errors = "Utilisateur inconnu";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    if(isLoggedIn()){
        header("Location :".__DIR__."/./home.php");
    }
?>
<center><h1> Welcome to our MIAGE blog</h1>
<center><h3> SIGN IN </h3>
<form name="connection" method="POST" action="./scripts/authenticate.php">
    <input type="text", name="username", value="", placeholder="username" /></p>
    <input type="password", name="password", value="", placeholder="password"/></p>
    <input type="submit", name="sign in", value="sign in", placeholder="sign in"/>
    </form>
    <a href="registerform.php">if you don't have a account, please register here </a>
</body>
</html>