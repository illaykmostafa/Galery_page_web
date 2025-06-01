<?php 
session_start();
unset($_SESSION['login']);
unset($_SESSION['role']);
header("Location:session.php");
session_destroy(); 
?>