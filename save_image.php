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
$id=$_POST['id'];
$image = 'image'.$image_name.'.jpg';
$path = "Images/$image_name";

$flag = 0;

// connect to the database
$query = "update user set images = '$path' where id = '$id'";
$res = mysqli_query($connection, $query);

