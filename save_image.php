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

$image_name = $_POST['image_name'];
$email=$_POST['email'];
$folder=(explode(',',$image_name,0))
$image = 'image'.$folder.$image_name.'.jpg';
$path = "Images/$image_name";

$flag = 0;

// connect to the database
$query = "insert into images values('$email','$image_name')";
$res = mysqli_query($connection, $query);

