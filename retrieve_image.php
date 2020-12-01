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

$email= "jaimin@gmail.com";

$query = "select image_name from images where email = '$email'";
$res = mysqli_query($connection, $query);
// $table = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html> 
<html> 
<head> 
 	<title>Retrieve Image</title> 
</head> 
<body> 
<?php
	while($row = mysqli_fetch_assoc($res)) {
		//echo $row["image_name"];
		$image_name = $row["image_name"];
		$folder=(explode('_',$image_name,2));
		$path = "Images/".$folder[0]."/".$row["image_name"];
		echo "<img src = '$path' alt = 'image'> ";
	}
?>
</body> 
</html> 