<?php
	include_once "connect.php";
	$id=$_GET['id'];
	$q="delete from regi where id='$id'";
	if(mysqli_query($con,$q))
	{
		echo "delete";
	}
	else
	{
		echo "error";
	}
?>