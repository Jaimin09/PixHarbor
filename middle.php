<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "pixharbor"; /* Database name */

$connection = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

$image_name = $_POST["image_name"];
$email = $_POST["email"];

// connect to the database
// $query = "insert into images values('$email','$image_name')";
//$query = "update user set temp_image = '$image_name' where email = '$email'";
$q_price = "select price from all_images where image_name = '$image_name' ";
$res = mysqli_query($connection, $q_price);
$row = mysqli_fetch_assoc($res);
$price = $row["price"];

$folder=(explode('_',$image_name,2));
$path = "Images/".$folder[0]."/".$image_name;
//echo "<img src = '$path'> ";


?>



<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        Image Details
    </title>
    <style>
        .header {
            display: inline;
        }

        .navbar-nav {
            float: right;

        }

        .navbar {
            margin-top: 70px;
        }

        .navbar-nav a {
            color: white;
        }

        .navbar-nav a:hover {
            color: black;
        }


        .foot i {
            color: skyblue;
            font-size: 34px;
            margin: 10px;
        }

        .foot i:hover {
            color: white;
            transition: 0.3s;
        }

        .foot {
            color: white;
            font-size: 16px;
        }

        .foot:hover {
            color: black;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: black;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: sans-serif;
            color: white;
        }

        .post {
            border: 1px solid #e3e6ea;
            text-align: center;
            padding: 19px;
        }

        .post:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transition: 0.3s;
        }

        .post:hover>.btnrm {
            color: white;
            background-color: skyblue;
            transition: 0.3s;
        }

        .btnrm {
            border-radius: 50px;
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: #30383b;
            color: white;
            margin-bottom: 30px;
        }

        .vi {
            width: 100%;
            color: white;
            padding: 5px;
            background-color: black;
        }

        .vi:hover {
            width: 100%;
            background-color: darkslategrey;
        }

        .btnrm:hover {
            color: white;
            background-color: skyblue;
            transition: 0.3s;


        }

          .btn{
           background-color: white;
           color: black;
           border-radius: 0px;
           padding-top: 16px;
           padding-bottom: 16px;
           padding-left: 25px;
           padding-right: 25px;
           letter-spacing: 0.5px;
           font-size: 15px;
           
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
                    <li><a href="gallery.html">HOME</a></li>
                    <li><a href="display_cart.php">CART</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                    <li><a href="home.html">LOGOUT</a></li>


                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="background-color: black; margin-top: 120px; padding-left: 0; border: 1px solid white;">
        <div class="row">
            <div class="col-sm-5">
            <?php echo "<img style='width: 100%; height: auto;' src='$path'>"; ?>
            </div>
            <div class="col-sm-7">

                <?php echo "<form style='background-color: black;  margin-left: 220px;' action='add_to_cart.php' method = 'POST'>
                <input type='hidden' name='image_name' value='$image_name'>
                <input type='hidden' name='email' value='$email'>                
                    <h3 style='margin-top: 100px;  margin-left: 17px;'>Price: $price </h3>
                    <button type ='submit' class='btn' style='font-weight: bold; border-radius: 50px;'>ADD TO CART</button>
                    "; 
                ?>
                </form>
            </div>
        </div>
    </div>


    <div class="container-fluid foot" style="background-color: black; text-align: center; padding: 50px;">
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-linkedin" aria-hidden="true"></i><br><br>

    </div>


</body>
<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</footer>

</html>