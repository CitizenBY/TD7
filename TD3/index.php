<?php
    $errors = "";
    if(empty($_GET["errors"]) == false && $_GET["errors"] == "parameters"){
        $errors = "Veuillez renseigner le username et/ou le password";
    }
    else if(empty($_GET["errors"]) == false && $_GET["errors"] == "db"){
        $errors = "Utilisateur inconnu";
    }
?>
<!doctype html> 
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./css/style.css"/>
        <title>Authentification</title>
    </head>
    <body>
    <p style="font-size:500%; "><center>BIENVENUE A VOTRE SITE! </center></p>

        <p class="errors"> <?php echo $errors ?> </p>
        <form method="POST" action="authentification.php">
            <fieldset>
            <legend>CONNEXION</legend>
                <input type="text" name="username" placeholder="Username" /><br/>
                <input type="password" name="password" placeholder="Password" /><br/><br/>
                <input id="se-connecter" type="submit" value="Se connecter" />
            </fieldset>
        </form>
    </body>
</html>