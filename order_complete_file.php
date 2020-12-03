<?php

session_start();

$email = $_SESSION["email"];

//$email = "jaiminhpatel09@gmail.com";

$connection = mysqli_connect("localhost", "root", "", "pixharbor");


$query = "select * from images where email = '$email'";
$res = mysqli_query($connection, $query);

$total_price = 0;
$order_invoice = "A";

while($row = mysqli_fetch_assoc($res)) {
    $image_name = $row["image_name"];
    $query_price = "select price from all_images where image_name = '$image_name'";

    $res_price = mysqli_query($connection, $query_price);
    $row_price = mysqli_fetch_assoc($res_price);

    $price = $row_price["price"];
    $total_price += $price;

    $order_invoice .= $image_name . " - Price : $". $price . "\n";
}

require_once 'PHPMailer/PHPMailer-5.2-stable/PHPMailerAutoload.php';

$from = 'pixharbor@gmail.com';
$to = $email;
$password = 'Pixharbor@1';
$sub = 'Order Placed Successfully';
$body = "<html><body><h1>Thank You for placing your order with us !<br></h1>

Your Invoice is given below : <br>
<?php $order_invoice ?>
<br>
<?php Your Total Price billed : $total_price ?>

</body></html>";

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = $from;
$mail->Password = $password;
$mail->Subject = $sub;
$mail->Body = $body;
$mail->IsHTML(true);
$mail->AddAddress($to);

if($mail->Send()) {
    //echo "<h2>Your Order has been placed successfully and invoice is mailed to you!!!</h2>";
}
else echo "<h2>There was an error, Please try again!!!</h2>";

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        Order Successfully placed
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
                    <li><a href="gallery.php">HOME</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>


                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row flex">
        
            <?php

            $res2 = mysqli_query($connection, $query);
            while($row2 = mysqli_fetch_assoc($res2)) {

                $image_name = $row2["image_name"];
                
                $folder=(explode('_',$image_name,2));
                $path = "Images/".$folder[0]."/".$row2["image_name"];

                $link = "raw.githubusercontent.com/Jaimin09/PixHarbor/main/".$path;

                echo "<div class='col-lg-4 col-sm-6'>
                        <div class='thumbnail'>
                            <img src='$path'>
                            <center><a href=$path download>
                            Download
                          </a></center>
                        </div>
                    </div>";
            }            
            ?>
        </div>
        <!-- <?php echo "<h1> Total Price : $ $total_price </h1>" ?> -->
    </div>

      
    <div class="container-fluid foot" style="background-color: black; text-align: center; padding: 50px;">
        <a href="https://www.linkedin.com/in/shreyash-kadam-8a9b41198"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://www.facebook.com/shtrokes_139-108439647264662"></a> <i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/jaiminpatel_009/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://twitter.com/?lang=en-in"><i class="fa fa-twitter" aria-hidden="true"></i></a>

    </div>


</body>
<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</footer>

</html>
