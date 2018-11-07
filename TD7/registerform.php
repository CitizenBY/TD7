<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    
</head>
<center><h1> Welcome to our Miage blog </h1>
<h2>Registration</h2></center>
<body>
<center><form action="" method="post"> 
    <?php 
    $inputs =array(
    "Firstname"=>"firstname","Lastname"=>"Lastname",
    "Username"=>"username","Password"=>"Password","E-mail"=>"email","Phone_Number"=>"Phone Number");
    foreach ($inputs as $key=>$input)
    {
        echo '<input name='.$key.' placeholder='.$input.'></p>';
    };
    ?>
    <p><select name="Gender" value="Gender">
    <option value="Male" selected="selected">Gender</option>
    <option value="Female">Female</option>
    </select></p>
    <input type='submit' value='Envoyer'/></center>
    
</body>
</html>