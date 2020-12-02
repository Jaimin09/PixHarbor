<?php

session_start();

$connection = mysqli_connect("localhost", "root", "", "pixharbor");

$acc = $_SESSION["email"];

$query = "DELETE from `user` WHERE `email` = '$acc';";

    
if(mysqli_query($connection, $query)){
    echo "<br><br><h2>Successfully Deleted Account !</h2><br><br>";
    session_destroy();
}
else
    echo "<br>Error while Deleting account. Try again !<br><br>";

?>

<html>
    <body>
        <button onclick = "window.location.href='login.php'">Go to Login Page</button>
        <button onclick = "window.location.href='signup.html'">Back to Sign Up Page</button>
    </body>
</html>