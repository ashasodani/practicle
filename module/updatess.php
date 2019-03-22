<?php
echo "hiiii";
$con=mysqli_connect('localhost','root','','tspl_hr');
$id=$_GET['id'];
$q=mysqli_query($con,"select * from candidate where id='$id'");
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