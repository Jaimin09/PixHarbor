<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "pixharbor"; /* Database name */

$connection = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

$image_name = $_POST['image_name'];
$email = $_SESSION["email"];

// connect to the database
$query = "insert into images values('$email','$image_name')";

$res = mysqli_query($connection, $query);
$folder=(explode('_',$image_name,2));
$path = "Images/".$folder[0]."_new/".$image_name;

$redirect_name = $folder[0] . "_images.php";
echo '<script>alert("Added to Cart")</script>'; 
header("location: $redirect_name");
?>