<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/connection/connect.php';

include $_SERVER['DOCUMENT_ROOT'].'/connection/session1.php';
$adminid=$_SESSION['adminid'];
 
$id=$_GET['id'];
 
 

$sql="DELETE FROM `amp_tour_management` WHERE  id=$id";
mysql_query($sql);

 
 
	header("location:cust_amp_tourdisplay.php");
 
?>