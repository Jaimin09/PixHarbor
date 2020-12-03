<?php
    session_start();
    session_destroy();
    
    echo "<h2>Successfully Loged Out ! </h2>";
    header("location : login.php");
?>
