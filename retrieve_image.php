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

$id=$_POST['id'];

$query = "select * from user where id = '$id'";
$res = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($res);
$image_name = $row['images'];
$path = "Images/$image_name";

?>

<!DOCTYPE html> 
<html> 
<head> 
 	<title>Retrieve Image</title> 
</head> 
<body> 
 	<img src = $path> 
</body> 
</html> 