<?php
include_once(__DIR__."/./utils/userutils.php");
// if(session_status() == PHP_SESSION_NONE){
//     session_start();
// }
session_destroy();
if(isLoggedIn()){
    header("Location :".__DIR__."/./home.php");
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
    <form action="" method="post"> 
        <div id="formulaire">
        <input type="text" name="firstname" value="" placeholder="Firstname"></br>
        <input  type="text" name="lastname" value="" placeholder="Lastname"></br>
        <input  type="text" name="username" value="" placeholder="Username"></br>
        <input  type="text" name="password" value="" placeholder="Password"></br>
        <input  type="text"  name="email" value="" placeholder="E-mail"></br>
        <input  type="text" name="phone" value="" placeholder="Phone"></br>
        </div>
    </form>
    
    <div>
           <p><select id="selecteur" name="Gender" value="Gender">
            <option value="Male" selected="selected">Male</option>
            <option value="Female">Female</option>
            </select></p>
        <input id="se-connecter" type='submit' value='SEND' />
    </div>

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
    <title>Register</title>
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
    
    <a id="lien" href="index.php?signup=True"></i> If you don't have an account! Please register here..</i> </a>
 
</body>
</html>

<?php } ?>