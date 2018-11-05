<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./css/style.css" />
        <title>Informations de l'utilisateur connecté</title>
    </head>
    <body>
      <?php 
          session_start();
      ?>

        <h3 style="font-family:courier; color:blue" >Bonjour <?php echo $_SESSION["user"]["lastname"]; ?> <?php echo $_SESSION["user"]["firstname"];?>!</h3>
           <center><a href="article.php">Article</a><br></center>
           <center><a href="Profile.php">Profile</a><br></center>
           <center><a href="logout.php">Se déconnecter</a></center>
    </body>
</html>