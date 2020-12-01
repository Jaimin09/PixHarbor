<?php

session_start();

$email = $_SESSION["email"];
$password = $_SESSION["password"];
$name = $_SESSION["name"];
$phone = $_SESSION["phone"];

$connection = mysqli_connect("localhost", "root", "", "pixharbor");

if($_POST["password"] != "") $password = $_POST["password"];
if($_POST["name"] != "") $name = $_POST["name"];
if($_POST["phone"] != "") $phone = $_POST["phone"];

// Validating Email
if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    echo "<br><br> Invalid Email Address.<br><br>";

else{
$query = "UPDATE `user` SET  `password` = '$password', `name` = '$name',   `phone` = '$phone' WHERE `email` = '$email';";

if(mysqli_query($connection, $query)){
    echo "<br><br><h2> Successfully Updated !</h2><br><br>";
    header("location: profile.php");
}
else
    echo "<br>Update Error. Please Try again !<br><br>";
}

?>

<html>
    <body>
        <button onclick = "window.location.href='profile.php'">Go to Profile Page</button>        
    </body>
</html>