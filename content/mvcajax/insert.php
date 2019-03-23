<?php
    include 'control.php';

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $education=$_POST['education'];
    /*$hobbies=$_POST['hobbies'];
    $h=implode(',',$hobbies);

    $as=$_FILES['fileToUpload']['name'];
    $tmp=$_FILES['fileToUpload']['tmp_name'];
    move_uploaded_file($tmp,"single/".$as);

*/    $a=new control();
    $aa=$a->insert($fname,$lname,$gender,$education)

?>