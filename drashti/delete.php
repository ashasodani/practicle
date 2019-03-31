<?php
include 'connect.php';
if(isset($_GET['id']))
{
$id=$_GET['id'];
$q="DELETE FROM `candidate` WHERE id='$id'";
$r=mysqli_query($con,$q);
header('location:display.php');
}
?>