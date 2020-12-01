<?php
    session_start();
?>

<html>
<head>
    <title>PixHarbor</title>
</head>
<body>
    <h1>hi <?php echo $_SESSION['email'] ?></h1>

    <button onclick="window.location.href='profile.php'">User Profile</button>
    <button onclick="window.location.href='logout.php'">Log Out</button>
    
</body>
</html>