
<?php

$con= New Mysqli("localhost","root","","a_asha");
include 'control.php';

$edit_id=$_POST['edit_id'];
$us= New control();
$upp=$us->update($edit_id);

if($upp)
			{
				$fet=$upp->fetch_object();
				echo json_encode($fet);
			}
			else
			{
				echo "There is issue in update Form!!";
			}


?>