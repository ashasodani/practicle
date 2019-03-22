<?php
ob_start();
	 date_default_timezone_set("Asia/Kolkata");
    $otp_date=date("Y-m-d H:i:s");

 	$sql="select * from otp_verify where memberid='$memberid' and redirect_page_name='$otp_entry_type' and  status='approved' and expiry_date>='$otp_date'";

    $sqp = mysqli_fetch_array(mysqli_query($con,$sql));
    if(mysqli_affected_rows($con)==0)
    {
      $sql_otp = mysqli_query($con,"select * from param_otp where otp ='yes' and page_name='$otp_entry_type'");
      if(mysqli_affected_rows($con)>0)      
      {
        header('location:otp_verify.php?page='.$otp_entry_type);
      }
    }  



?>