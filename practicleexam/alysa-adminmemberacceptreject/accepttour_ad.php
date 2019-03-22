<?php
@session_start();

include $_SERVER['DOCUMENT_ROOT'].'/connection/connect.php';

include $_SERVER['DOCUMENT_ROOT'].'/connection/session1.php';
$adminid=$_SESSION['adminid'];
date_default_timezone_set("Asia/Kolkata");
$d=date("Y-m-d H:i:s");
$memberid=$_POST['memberid'];
$id=$_POST['id'];

 $query=mysql_query("UPDATE `cust_amp_tourselect` SET `status`='accept' WHERE memberid='$memberid' and id='$id'");
if($query)
{
echo "yes";
}
else
{
	echo "no";
}

?>