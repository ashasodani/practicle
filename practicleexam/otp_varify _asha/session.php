<?php 
@session_start();
@include 'connect.php';
if(isset($_SESSION['memberid']))
	{
		$memberid=$_SESSION['memberid'];
		mysql_query("select * from `registration` where `lock`='1' and `memberid`='$memberid'");
		if(mysql_affected_rows()>0)
		{
			//header("location:../index.php?lock=yes");	
			$id=$_SESSION['company_id'];
			header("location:../index.php?id=".$id."&lock=yes");	

		}
	}
	else
	{
		header("location:../index.php");
		exit();
	}?>