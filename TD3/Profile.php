<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Profile</title>
    
</head>
<body>
<?php 
            session_start();
            
            if(empty($_SESSION) == false && empty($_SESSION["user"]) == false){
        ?>
            <h1>Informations</h1>

            <p>Prénom : <?php echo $_SESSION["user"]["firstname"];  ?></p>
            <p>Nom : <?php echo $_SESSION["user"]["lastname"];  ?></p>
            <p>Date de naissance : <?php echo $_SESSION["user"]["dateOfBirth"];  ?></p>
            <p>Mot de passe : <?php echo $_SESSION["user"]["password"];  ?></p>
            <p>Téléphone : <?php echo $_SESSION["user"]["phone"];  ?></p>
            <p>Username : <?php echo $_SESSION["user"]["username"];  ?></p>
            <br/>
            <a href="logout.php">Se déconnecter</a>
        <?php }else { ?>
            <p>Zone interdite, cliquez <a href="index.php">ici</a> pour revenir au formulaire</p>
        <?php } ?>   
</body>
</html>

        
        
            