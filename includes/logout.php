<?php
session_start();
session_destroy(); 
header("Location: ../includes/login.php"); 
exit;
?>
