<?php
	include_once "connect.php";
/*if(isset($_POST['submit']))
{
*/	
	$name=$_POST['name'];

	$address=$_POST['address'];
	
	$gender=$_POST['gender'];
	
	$education=$_POST['education'];
	
	$h1=$_POST['hobby'];
	$hobby=implode(',',$h1);
	
	$profile=$_FILES['profile']['name'];
		move_uploaded_file($_FILES['profile']['tmp_name'], "img/$profile");

	$gal=array();
	foreach ($_FILES['gallary']['tmp_name'] as $key => $tmpname) {
		$file=$_FILES['gallary']['name'][$key];
		$tmpname=$_FILES['gallary']['tmp_name'][$key];
		move_uploaded_file($tmpname, "img/$file");

		array_push($gal, $file);
	}
	$gallary=implode(",", $gal);

	$insert="insert into `regi`(`name`,`address`,`gender`,`education`,`hobby`,`profile`,`gallary`)values('$name','$address','$gender','$education','$hobby','$profile','$gallary')";
	$d=mysqli_query($con,$insert);

	if($d>0)
	{
		echo "insert";
	}
	else
	{
		echo "error";
	}

?>