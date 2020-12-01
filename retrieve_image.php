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

$email=$_POST['email'];

$query = "select * from images where email = '$email'";
$res = mysqli_query($connection, $query);
$table = mysqli_fetch_assoc($res);

//Insert here to access all rows of $table 

$image_name = $table['images'];
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