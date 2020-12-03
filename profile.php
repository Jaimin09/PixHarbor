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

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        LOGIN
    </title>
    <style>
        @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

        body {
            margin: 0;
            padding: 0;
            background-image: linear-gradient(rgba(0, 0, 0, .55), rgba(0, 0, 0, .55)), url("https://www.itl.cat/pngfile/big/48-485496_camera-nikon-dslr-wallpapers-hd-background-images-of.jpg");
            ;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: sans-serif;
            color: white;
        }

        .navbar-nav {
            float: right;

        }

        .navbar {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .navbar-nav a {
            color: white;
            padding: 0;
        }

        .navbar-nav a:hover {
            color: black;

        }

        .header {
            display: inline;
        }

    </style>

</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="header">

                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img style="height: 50px; width: 25%; margin-top: 30px;"
                            src="Images/pixharbor2.png" /></a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="gallery.php">HOME</a></li>
                    <li><a href="display_cart.php">CART</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 style='font-weight: bolder;'>Hello <?php echo $_SESSION["name"]; ?> !</h1>
        <p style = "font-size:20px; margin : 50px; margin-left:0px;">
        <?php
        
            echo "Email : ", $_SESSION["email"], "<br>";
            echo "Name : ",$_SESSION["name"], "<br>";
            echo "Password : ", $_SESSION["password"], "<br>";
            echo "Phone Number : ", $_SESSION["phone"], "<br>";
            
        ?>
    </p>
        <button class="btn btn-success" onclick="window.location.href='update_page.html'">Update Info</button>
        <button class="btn btn-danger" onclick="window.location.href='delete.php'">Delete Account</button>

    </div>



</body>

</html>