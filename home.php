<?php
include 'db.php';
session_start();

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="x-icon" href="images/logo.png">
    <title>Home</title>
    
  </head>
  <body>
    <h1>Welcome <?php echo $email; ?></h1>
    <a href="logout.php">Logout</a>
  </body>
</html>
