<?php

// session_start();

// $email = $_SESSION["email"];

$email = "manavkhorasiya@gmail.com";

// $connection = mysqli_connect("localhost", "root", "", "pixharbor");

require_once 'PHPMailer/PHPMailer-5.2-stable/PHPMailerAutoload.php';

// $query = "SELECT * FROM user WHERE email='$email'";
// $res=mysqli_query($connection,$query);

// $query2 = "select * from images where email = '$email'";
// $res2 = mysqli_query($connection, $query2);

$from = 'pixharbor@gmail.com';
$to = $email;
$password = 'Pixharbor@1';
$sub = 'Order Placed Successfully';
$body = "<html><body><h1>Hello Manav, this is your order<br></h1><a href='https://raw.githubusercontent.com/Jaimin09/PixHarbor/main/Images/fitness/fitness_1.jpg' download><img src = 'Images/fitness/fitness_1.jpg' alt='image'></a></body></html>";
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = $from;
// $image_name = $row["image_name"];
//     $folder=(explode('_',$image_name,2));
//     $path = "Images/".$folder[0]."/".$row["image_name"];
//     $mail->AddEmbeddedImage('$path', '$image_name');
$mail->Password = $password;
$mail->Subject = $sub;
$mail->Body = $body;
$mail->IsHTML(true);
$mail->AddAddress($to);
// while($row=mysqli_fetch_assoc($res2)) {
//     $image_name = $row["image_name"];
//     $folder=(explode('_',$image_name,2));
//     $path = "Images/".$folder[0]."/".$row["image_name"];
//     $mail->AddEmbeddedImage('$path', '$image_name')
// }
if($mail->Send()) {
    echo "<h2>Email sent successfully!!!</h2>";
}
else echo "<h2>There was an error, Please try again!!!</h2>";



?>
