<?php
    session_start();

    $connection = mysqli_connect("localhost", "root", "", "pixharbor");

    $email = $_POST["email"];
    $password = $_POST["password"];

    if($connection){

        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";

        $res=mysqli_query($connection,$query);
        if(mysqli_num_rows($res)>0){

            $user=mysqli_fetch_all($res,MYSQLI_ASSOC);
            $_SESSION['email'] = $email;
            header("location: main.php");
        }

        else{
            echo "Invalid User id or Password ! <br><br>";
        }

    }
    else{
        echo "Connection Not Established !<br><br>";
    }

?>

<html>
<body>
    <button onclick = "window.location.href='login.html'">Go to Login Page</button>
</body>
</html>

