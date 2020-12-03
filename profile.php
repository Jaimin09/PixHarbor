<?php

session_start();

$connection = mysqli_connect("localhost", "root", "", "pixharbor");
$email = $_SESSION['email'];
$query = "SELECT * FROM user WHERE email='$email' ";

$res=mysqli_query($connection,$query);
if(mysqli_num_rows($res)>0){

    $user=mysqli_fetch_all($res,MYSQLI_ASSOC);
    $_SESSION['email']=$user[0]['email'];
    $_SESSION['password']=$user[0]['password'];
    $_SESSION['name']=$user[0]['name'];
    $_SESSION['phone']=$user[0]['phone'];
}

?>

<html>
<head><title>Profile Page</title></head>
<body>

    <h1>Your Profile, <?php echo $_SESSION['name']; ?> </h1>

    <p>
        <?php
        
            echo "email : ", $_SESSION["email"], "<br>";
            echo "name : ",$_SESSION["name"], "<br>";
            echo "password : ", $_SESSION["password"], "<br>";
            echo "phone Number : ", $_SESSION["phone"], "<br>";
            
        ?>
    </p>
    
    <button onclick = "window.location.href='main.php'">Main Page</button>
    <button onclick = "window.location.href='update_page.html'">Update Profile</button>
    <button onclick = "window.location.href='delete.php'">Delete Account</button>
</body>
</html>