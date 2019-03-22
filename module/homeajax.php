<?php
$con=mysqli_connect('localhost','root','','tspl_hr');
$name=$_POST['name'];
$address=$_POST['address'];
$state=$_POST['state'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$profile_type=$_POST['profile_type'];
$career_start_date=$_POST['career_start_date'];
$dob=$_POST['dob'];

$q="INSERT INTO `candidate`(`name`, `address`, `city`, `state`, `pincode`, `profile_type`, `career_start_date`, `dob`) VALUES ('$name','$address','$city','$state','$pincode','$profile_type','$career_start_date','$dob')";
  $r=mysqli_query($con,$q);
  include "display.php";
  ?>
