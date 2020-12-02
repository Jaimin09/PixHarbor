<?php
    session_start();
    session_destroy();
    
    echo "<h2>Successfully Loged Out ! </h2>";
?>

<html>
<body>
    <button onclick = "window.location.href='login.php'"> Go to Login Page </button>
</body>
</html>