<?php

include 'connect.php';

$memberid='100001';
$otp = $_POST['otp'];
date_default_timezone_set("Asia/Kolkata");
$d=date("Y-m-d H:i:s");

$re_page =$_GET['page'];
echo $re_page;
$row = mysqli_query($con,"select * from otp_verify where memberid='$memberid' and otp='$otp'");
if(mysqli_affected_rows($con)>0)
{
	$row_otp = mysqli_query($con,"select * from otp_verify where memberid='$memberid' and otp='$otp' and expiry_date>'$d' and redirect_page_name='$re_page'");

	//updayte status otp_ver
	if(mysqli_affected_rows($con)>0)
	{
		

		//$sql_otp = mysql_fetch_array($row_otp);
		//$page = $sql_otp['redirect_page_name'];

		$sql =mysqli_query($con,"update otp_verify set status='approved' where memberid='$memberid' and otp='$otp'");
		header("location:".$re_page."?msg=1");
	}
	else
	{
		header("location:otp_verify.php?page=".$re_page."&msg=2");

	}
}
else
{
		header("location:otp_verify.php?page=".$re_page."msg=3");

}
?>
