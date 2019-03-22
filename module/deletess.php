<?php

$con=mysqli_connect('localhost','root','','tspl_hr');
$id=$_GET['id'];
echo $q="delete from candidate where id='$id'";
$r=mysqli_query($con,$q);
?>