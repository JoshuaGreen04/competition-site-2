<?php 
session_start() 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        #background {
            margin-top: 450px;
        }
    </style>
</head>
<body>
    <?php
    require 'connect.php';
    include 'nav.php';
    ?>
    <h1>Sign Up</h1>
    <form action="signupAction.php" method="post" id="sign-up-form">
        <input type="text" name="uid" placeholder="Enter your Username"><br>
        <input type="text" name="email" placeholder="Enter your Email"><br>
        <input type="text" name="fnid" placeholder="Enter your First Name"><br>
        <input type="text" name="lnid" placeholder="Enter your Last Name"><br>
        <input type="password" name="pwd" placeholder="Enter your Password"><br>
        <input type="password" name="pwd-check" placeholder="Re-enter your Password"><br>
        <button type="submit" name="signupBtn">Sign Up</button>
    </form>
    <!--Background of the text-->
    <div id="background"></div>
</body>
</html>