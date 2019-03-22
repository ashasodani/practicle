<?php

	include_once "connect.php";

	$id=$_POST['id'];
	$name=$_POST['name'];

	$address=$_POST['address'];
	
	$gender=$_POST['gender'];
	
	$education=$_POST['education'];
	
	$h1=$_POST['hobby'];
	$hobby=implode(',',$h1);
	
	if(isset($_FILES['profile']['name']))
	{
	$profile=$_FILES['profile']['name'];
		move_uploaded_file($_FILES['profile']['tmp_name'], "img/$profile");
	}
	if(empty($_FILES['profile']['name']))
	{
		$profile=$_POST['profile1'];
	}

	if(isset($_FILES['gallary']['name']))
	{
		$gal=array();
	foreach ($_FILES['gallary']['tmp_name'] as $key => $tmpname) {
		$file=$_FILES['gallary']['name'][$key];
		$tmpname=$_FILES['gallary']['tmp_name'][$key];
		move_uploaded_file($tmpname, "img/$file");

		array_push($gal, $file);
	}
	$gallary=implode(",", $gal);
	}
	if(in_array("", $_FILES['gallary']['name']))
	{
		$gallary=$_POST['gallary1'];
	}
	


	$q="update regi set name='$name',address='$address',gender='$gender',education='$education',hobby='$hobby',profile='$profile',gallary='$gallary' where id='$id'";
	$query=mysqli_query($con,$q);
	if($query)
	{
		echo "update";
	}
	else
	{
		echo "error";
	}
?>