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
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body> 
<?php
    if(isLoggedIn()){
        header("Location :".__DIR__."/./home.php");
    }
?>

        <center><fieldset style="background:lightblue;width: 50%;border-radius:1000px;"> <h1 style="background:lightblue;font-family:Tahoma">Welcome to our MIAGE blog</h1></fieldset></center>
        <b><h2 style="color:Tan; font-family: courier;">SIGN IN</b></h2>
<fieldset>
    <form  name="connection" method="POST" action="./scripts/authenticate.php">
            <i class="glyphicon glyphicon-user"></i>

            <input  type="text", name="username", value="", placeholder="Username" /></p> 
            <i class="glyphicon glyphicon-lock"></i>
            <input  type="password", name="password", value="", placeholder="Password"/></p>
            <input id="se-connecter"  type="submit", name="sign in", value="sign in", placeholder="sign in"/></i></p>
    </form>
    </fieldset>
    <a id="lien" href="registerform.php"><i class="glyphicon glyphicon-exclamation-sign"></i> If you don't have an account! Please register here..<i class="glyphicon glyphicon-menu-right"></i> </a>
 
</body>
</html>