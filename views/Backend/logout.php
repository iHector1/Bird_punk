<?php
    session_start();
    session_destroy();
    header("Location:http://localhost/Bird_punk/views/Logout.php");
?>