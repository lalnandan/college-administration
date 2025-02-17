<?php
session_start();
session_destroy();
header("Location: studentportallogin.php"); // Redirect to login page after logout
exit();
?>  
logout php
