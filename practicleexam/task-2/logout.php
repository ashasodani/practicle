<?php
session_start();
$name=$_SESSION['username'];

// session_destroy($name);
session_unset($name);
header('location:index.php');
?>