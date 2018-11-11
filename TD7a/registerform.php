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

<body>
    <center><form style="border: 2px solid lightblue;border-radius: 10px" action="" method="post"> 
        <p><?php 
        $inputs =array(
        "Firstname"=>"firstname","Lastname"=>"Lastname",
        "Username"=>"username","Password"=>"Password","E-mail"=>"email","Phone_Number"=>"Phone Number");
        foreach ($inputs as $key=>$input)
        {
            echo '<input name='.$key.' placeholder='.$input.'></p>';
        };
           ?></p>
           <p><select id="selecteur" name="Gender" value="Gender">
            <option value="Male" selected="selected">Male</option>
            <option value="Female">Female</option>
            </select></p>
        <input id="se-connecter" type='submit' value='SEND' /></center>
</html>