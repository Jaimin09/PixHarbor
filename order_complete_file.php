<?php

session_start();

$email = $_SESSION["email"];

// $connection = mysqli_connect("localhost", "root", "", "pixharbor");

require_once 'PHPMailer/PHPMailer-5.2-stable/PHPMailerAutoload.php';

$query = "SELECT * FROM user WHERE email='$email'";
$res=mysqli_query($connection,$query);

$from = 'pixharbor@gmail.com';
$to = $email;
$password = 'Pixharbor@1';
$sub = 'Order Placed Successfully';
$body = "Hello '$res['name']', this is your order";
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
$mail->AddAddress($to);
if($mail->Send()) {
    echo "<h2>Email sent successfully!!!</h2>";
}
else echo "<h2>There was an error, Please try again!!!</h2>";



?>
