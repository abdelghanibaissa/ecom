
<?php
require 'db.php';
include("header.html");
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `account` WHERE email = '" . $email . "' AND password = '" . $password . "'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    if (is_array($row) > 0) { 
        $_SESSION['email']=$email;
       echo "<script> alert('".$_SESSION['email']." '); </script>";
        header('location: home.php');
    } else{
        echo
        "<script> alert('User Not Registered'); </script>";
      }
}
?>
 <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="x-icon" href="images/logo.png">
<body>
    <div>
    <form method="post" action="">
        <label>Email</label>
        <input type="text" name="email">
        <label>Password</label>
        <input type="text" name="password">
        <a href="register.php"> Register</a>
        <button type="submit" name="submit" >Login</button>
    </form>
    </div>
</body>
</html> 