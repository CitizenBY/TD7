<?php
include_once(__DIR__."/./utils/userutils.php");
$signUp=False;
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(isset($_GET["signup"])){//page register
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style.css"/>
    <title>Register</title>
    
</head>
    <h1 style="background:white"> Welcome to our Miage blog </h1>
    <center><h2 style="background:lightgray; width: 50%;border-radius:1000px; ">Registration</h2></center>

<body style="background:lightgoldenrodyellow">
    <center>
    <form style="border: 2px solid lightblue;border-radius: 10px" action="" method="post"> 
        <p><?php 
        $inputs =array(
        "Firstname"=>"firstname","Lastname"=>"Lastname",
        "Username"=>"username","Password"=>"Password","E-mail"=>"email","Phone_Number"=>"Phone Number");
        foreach ($inputs as $key=>$input)
        {
            echo '<input id="text" name='.$key.' placeholder='.$input.'></p>';
        };
           ?>
           <p><select id="selecteur" name="Gender" value="Gender">
            <option value="Male" selected="selected">Male</option>
            <option value="Female">Female</option>
            </select></p>
    </form>
        <input id="se-connecter" type='submit' value='SEND' /></center>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background:lightgoldenrodyellow"> 
<?php
    if(isLoggedIn()){
        echo "victoire";
        // header("Location :".__DIR__."/./home.php");
    }
?>

        <center><fieldset style="background:lightblue;width: 50%;border-radius:1000px;"> <h1 style="background:lightblue;font-family:Tahoma">Welcome to our MIAGE blog</h1></fieldset></center>
        <b><h2 style="color:Tan; font-family: courier;">SIGN IN</b></h2>
<fieldset>
    <form  name="connection" method="POST" action="./scripts/authenticate.php">
            <i class="glyphicon glyphicon-user"></i>

            <input  type="text", name="username", value="", placeholder="Username" required/></p> 
            <i class="glyphicon glyphicon-lock"></i>
            <input  type="password", name="password", value="", placeholder="Password" required/></p>
            <input id="se-connecter"  type="submit", name="sign in", value="sign in", placeholder="sign in"/></i></p>
    </form>
</fieldset>

    
    <a id="lien" href="index.php?signup=True"><i class="glyphicon glyphicon-exclamation-sign"></i> If you don't have an account! Please register here..<i class="glyphicon glyphicon-menu-right"></i> </a>
 
</body>
</html>

<?php } ?>