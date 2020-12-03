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
// $query = "insert into images values('$email','$image_name')";
$query = "update user set temp_image = '$image_name' where email = '$email'";

$res = mysqli_query($connection, $query);
$folder=(explode('_',$image_name,2));
$path = "Images/".$folder[0]."_new/".$image_name;
echo "<img src = '$path'> ";
echo "Price : $10";

echo "<form action = 'add_to_cart.php' method = 'POST' ><input type='hidden' name='image_name' value='$image_name'><input type='hidden' name='email' value='$email'>";
echo "<button type = 'submit'> Add To Cart </button></form>";

?>