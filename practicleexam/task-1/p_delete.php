<?php
include 'connect.php';
if(isset($_GET['id']))
{
$id=$_GET['id'];
$q="DELETE FROM `profile` WHERE id='$id'";
$r=mysqli_query($con,$q);
header('location:p_display.php');
}
?>