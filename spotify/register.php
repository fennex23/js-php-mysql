<?php
    include("includes/handlers/register-handler.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Fenschify</title>
</head>
<body>
   <div id="inputContainer">
        <form action="register.php" method="POST" id="loginForm">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input type="text" name="loginUsername" id="loginUsername" placeholder="Username" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input type="password" name="loginPassword" id="loginPassword" placeholder="Password" required>
            </p>
            <button type="submit" name="loginButton">Login</button>
        </form>

        <!--  register form -->
        <form action="register.php" method="POST" id="loginForm">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </p>
            <p>
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
            </p>
            <p>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" placeholder="Last Name" required>
            </p>
            <p>
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </p>
            <p>
                <label for="email2">Confirm E-Mail</label>
                <input type="text" name="email2" id="email2" placeholder="Confirm Email" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </p>
            <p>
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" id="password2" placeholder="Confirm Password" required>
            </p>


            <button type="submit" name="registerButton">Sign Up</button>
        </form>

   </div>
</body>
</html>