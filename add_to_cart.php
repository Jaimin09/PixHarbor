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
$email = "jaimin@gmail.com";

// connect to the database
$query = "insert into images values('$email','$image_name')";

$res = mysqli_query($connection, $query);
$folder=(explode('_',$image_name,2));
$path = "Images/".$folder[0]."/".$image_name;

header('localtion : retrieve_all_images_fitness.php');
?>