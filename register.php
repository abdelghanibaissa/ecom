<?php

include 'db.php';
if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $query = "INSERT INTO `account` VALUES ('$email','$username','$password')";
     $s= mysqli_query($con, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post" action="register.php">
            <label>Username</label>
            <input type="text" name="username">
            <label>Email</label>
            <input type="text" name="email" >
            <label>Password</label>
            <input type="password" name="password" > 
            <a href="login.php"> login</a>

            <button type="submit" name="submit">register</button>
    </div>
</body>
</html>
