<?php
include_once "connect.php";
$id=$_GET['id'];
$q=mysqli_query($con,"select * from regi where id='$id'");
if($q)
{
	$result=mysqli_fetch_array($q);
	echo json_encode($result);
}
else
{
	echo "not fetch data";
}

?>