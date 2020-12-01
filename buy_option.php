<?php
    session_start();

    $email = $_SESSION['email'];

    $opt = $_POST["buy_option"];
    $connection = mysqli_connect("localhost", "root", "", "pixharbor");

    if($opt == "buy_now")
        header("location: checkout.html");
    else{
        $query = "SELECT subscribed FROM user WHERE email='$email' ";
        $res=mysqli_query($connection,$query);

        if($res == 0)
            header("location: pricing.html");
        else{
            echo "Successfully bought !"
        }
        echo $res;
        
    }
        
?>