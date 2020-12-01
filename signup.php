<?php

$connection = mysqli_connect("localhost", "root", "", "pixharbor");

$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];
$phone = $_POST["phone"];

$query = "SELECT * FROM user WHERE email='$email'";

$res=mysqli_query($connection,$query);

if(mysqli_num_rows($res)>0){
    echo "<h2> User Name already exist! Please Try a different Username !</h2>";
}

else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
    echo "<h3> Invalid Email Address. </h3><br><br>";

else{
$query = "INSERT INTO `user` (`email`, `password`, `name`, `phone`) 
                VALUES ('$email', '$password', '$name', $phone);";

if(mysqli_query($connection, $query)){
    echo "<br><br><h2>Successfully Signed Up !</h2><br><br>";
    header("location: login.html");
}
else
    echo "<br><h2>Sign up Error. Please Try again !</h2><br><br>";
}

?>

<html>
    <body>
        <button onclick = "window.location.href='login.html'">Back to Login Up Page</button>
    </body>
</html>