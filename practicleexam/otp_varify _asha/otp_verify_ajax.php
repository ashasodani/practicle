<?php
include 'connect.php';

$memberid='100001';
//echo $pos;

date_default_timezone_set("Asia/Kolkata");
$d=date("Y-m-d H:i:s");

$date=date("Y-m-d H:i:s",strtotime("+30 minutes"));

$encode="123456789";
$pos=substr(str_shuffle($encode),0,6);
$otp = $pos;
$sql_mob = mysqli_fetch_array(mysqli_query($con,"select mobile,email from registration where memberid='$memberid'"));
$mobile = $sql_mob['mobile'];
$email = $sql_mob['email'];


$sql_url = mysqli_fetch_array(mysqli_query($con,"select compnay_url from paramadmincontrol"));
$website = $sql_url['compnay_url'];

$status= 'pending';

$page = $_POST['page'];
if($page !='')
{
	$sql_verify = mysqli_query($con,"SELECT * FROM otp_verify WHERE memberid='$memberid' AND expiry_date>='$d' and redirect_page_name='$page'");
	if(mysqli_affected_rows($con)>0)
	{
		echo "no";	//otp already send
	}
	else
	{

		$query = "INSERT INTO `otp_verify`(`entrydate`, `memberid`, `mobile`,`email`, `otp`, `status`, `redirect_page_name`, `expiry_date`) VALUES ('$d','$memberid','$mobile','$email','$otp','$status','$page','$date')";
		mysqli_query($con,$query);
		echo "yes";
		if(mysqli_affected_rows($con)>0)
		{

			$q=mysqli_query($con,"select * from paramsms where SMSType='AUTHENTICATIONCODE' and SMSRequired='yes'");
			if(mysqli_affected_rows($con)>0)
			{
						$raw1=mysqli_fetch_array($q);
						$msg=$raw1['SMSBody'];
						//echo $msg;
						$msg=str_replace("[MEMBERID]",$memberid,$msg);
						$msg=str_replace("[OTP]",$otp,$msg);
						$msg=str_replace("[EXPIRYDATE]",$date,$msg);
						
						//echo $msg;
						
					//	include '../Admin/php/smssend.php';
					//	include '../php/mail_otp.php';

			}

		}
	}
}
else
{
	echo "no1";
}
?>
