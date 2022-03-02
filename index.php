<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In/Sign Up</title>
    <style>
        #background {
            margin-top: none;
        }
    </style>
</head>
<body>
    <!--Background of the text-->
    <div id="background">
        <!--Log In and Sign Up buttons-->
        <button id="log-in" onclick="document.getElementById('log-in-pop-up').style.visibility='visible'">Log In</button>
        <button id="sign-up" onclick="document.getElementById('sign-up-pop-up').style.visibility='visible'">Sign Up</button>
        <!--Log In and Sign Up pop ups-->
        <div id="log-in-pop-up">
            <form action="#" method="POST">
                <!--log in fields-->
                <h2 id="log-in-username">Username</h2>
                <input type="text" id="log-in-username-text">
                <h2 id="log-in-password">Password</h2>
                <input type="password" id="log-in-password-text">
            </form>
            <button id="log-in-cancel" onclick="document.getElementById('log-in-pop-up').style.visibility='hidden'">Back</button>
            <button id="log-in-finish"><a href="home.html">Log In</a></button>
        </div>
        <!--sign up pop up-->
        <div id="sign-up-pop-up">
            <form action="#" method="POST">
                <!--sign up fields-->
                <h2 id="sign-up-username">Username</h2>
                <input type="text" id="sign-up-username-text">
                <h2 id="sign-up-password">Password</h2>
                <input type="password" id="sign-up-password-text">
            </form>
            <button id="sign-up-cancel" onclick="document.getElementById('sign-up-pop-up').style.visibility='hidden'">Back</button>
            <button id="sign-up-finish"><a href="home.html">Sign Up</a></button>
        </div>
    </div>
</body>
</html>