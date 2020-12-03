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

$query = "select * from all_images where category='work'";
$res = mysqli_query($connection, $query);
$email = "jaimin@gmail.com";

?>

<!DOCTYPE html> 
<html> 
<head> 
 	<title>Retrieve All Work Images</title> 
</head> 
<body> 
<?php
	while($row = mysqli_fetch_assoc($res)) {
		//echo $row["image_name"];
		$image_name = $row["image_name"];
		$folder=(explode('_',$image_name,2));
        $path = "Images/".$folder[0]."_new/".$row["image_name"];
        echo "<img src = '$path' alt = 'image'> ";

        echo "<form action = 'save_image.php' method = 'POST' ><input type='hidden' name='image_name' value='$image_name'><input type='hidden' name='email' value='$email'>";
        echo "<button type = 'submit'> View Image </button></form>";
	}
?>
</body> 
</html> 