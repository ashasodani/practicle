<?php 
@session_start();
    include 'connect.php';
    // include 'session.php';
  
	 date_default_timezone_set("Asia/Kolkata");
    $otp_date=date("Y-m-d H:i:s");

 	$sql="select * from otp_verify where status='approved' and expiry_date>='$otp_date'";

    $sqp = mysqli_fetch_array(mysqli_query($con,$sql));
    if(mysqli_affected_rows($con)==0)
    {
    	//OTP Form
    }  
    else
    {
    	//IPAPPORVE Table
    }



?>