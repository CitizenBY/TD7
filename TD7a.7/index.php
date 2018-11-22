<?php
session_start();
include_once(__DIR__."/./utils/userutils.php");

// session_destroy();

if(isLoggedIn()){
    header("location:./home.php");
}
if(isset($_GET["signup"])){//page register
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Register</title>
</head>
    
<body>

    <h1> Welcome to our Miage blog </h1>
    <h2>REGISTRATION</h2>

    <center>
    <?php
    if(isset($_GET['taken'])){
        echo"<p>Username is already taken</p>";
    }
    ?>
    
    <form action="./scripts/register.php" method="post"> 
        <div id="formulaire">
        <input type="text" name="firstname" value="" placeholder="Firstname"></br>
        <input  type="text" name="lastname" value="" placeholder="Lastname"></br>
        <input  type="text" name="username" value="" placeholder="Username"></br>
        <input  type="password" name="password" value="" placeholder="Password"></br>
        <input  type="text"  name="email" value="" placeholder="E-mail"></br>
        <input  type="text" name="phone" value="" placeholder="Phone"></br>
        </div>
    
        <div>
           <p><select id="selecteur" name="gender" value="Gender">
            <option value="MALE" selected="selected">Male</option>
            <option value="FEMALE">Female</option>
            </select></p>
        <input id="se-connecter" type='submit' value='SEND' />
        </div>
    </form>
    <a id="lien" href="index.php"></i> Already registered? Please login here</i> </a>

    </center>
</body>        
</html>



<?php
}
else{//page sign in
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body> 

        <h1>Welcome to our MIAGE blog</h1>
        <h2>SIGN IN</h2>

    <div id="sign_in">
     
            <form  name="connection" method="POST" action="./scripts/authenticate.php">
            <input  type="text", name="username", value="", placeholder="Username" required/></p> 
            <input  type="password", name="password", value="", placeholder="Password" required/></p>
            <input id="se-connecter"  type="submit", name="sign in", value="sign in", placeholder="sign in"/></i></p>
            </form>
        
    </div>
    
    <a id="lien" href="index.php?signup=True"></i> New user? Please Register here</i> </a>
 
</body>
</html>
<?php
}
?>