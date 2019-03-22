<?php
@session_start();

include $_SERVER['DOCUMENT_ROOT'].'/connection/connect.php';

include $_SERVER['DOCUMENT_ROOT'].'/connection/session1.php';
$adminid=$_SESSION['adminid'];
date_default_timezone_set("Asia/Kolkata");
$d=date("Y-m-d H:i:s");
$id=$_POST['id'];
$memberid=$_POST['memberid'];
 date_default_timezone_set("Asia/Kolkata");
 /*echo  $d=date("Y-m-d H:i:s");*/
 echo "today".$dates=date("Y-m-d 23:59:59");

 $query=mysql_query("UPDATE `cust_amp_tourselect` SET `status`='reject' WHERE memberid='$memberid'");
if($query)
{
echo "yes";
}
else
{
	echo "no";
}
$s_admin=mysql_fetch_array(mysql_query("SELECT * FROM `cust_amp_tourselect` where  memberid='$memberid'"));
  $statusadmin=$s_admin['status'];
  
  if($statusadmin=='reject')
  {
    if($lastroidate<$d)
    {
    echo "update".$sql="UPDATE `topupdetails` SET `lastroidate`='$dates' WHERE memberid='$memberid'";
          mysql_query($sql);
    }
$asroico=mysql_fetch_array(mysql_query("SELECT * FROM `amp_roitopup` where memberid='$memberid' order by id desc limit 1"));
    echo "coissss".$amproicount=$asroico['roicount'];
  echo "update".$sql="UPDATE `topupdetails` SET `roicount`='$amproicount' WHERE memberid='$memberid'";
          $query=mysql_query($sql);
  }
?>