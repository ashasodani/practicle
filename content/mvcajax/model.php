<?php
class model
{
	function insert($fname,$lname,$gender,$education)
	{
		$con=mysqli_connect("localhost","root","","a_asha");
		$q="INSERT INTO `ashh`(`fname`, `lname`, `gender`, `education`) VALUES ('$fname','$lname','$gender','$education')";
		$sql=mysqli_query($con,$q);
		if($sql)
		{
			header('list.php');
		}
		else
		{
			echo "error in record";
		}
	}
	function list1()
	{
		$con=mysqli_connect("localhost","root","","a_asha");
		$sel=" SELECT * FROM `ashh`";
		$result=mysqli_query($con,$sel);
		return $result;
		
	}
	function delete($did)
	{
		$con=mysqli_connect("localhost","root","","a_asha");
		$delete=" DELETE FROM `ashh` WHERE id='$did'";
		$sql=mysqli_query($con,$delete);
		
	}
	function update($edit_id)
	{
		$con=mysqli_connect("localhost","root","","a_asha");
		$edi=" SELECT * FROM `ashh` WHERE id='$edit_id'";
		$sql=mysqli_query($con,$edi);
		return $sql;
		
	}
	function edit($edit_id,$fname,$lname,$gender,$education)
	{
		$con=mysqli_connect("localhost","root","","a_asha");
		echo $up="UPDATE `ashh` SET `fname`='$fname',`lname`='$lname',`gender`='$gender',`education`='$education' WHERE id='$edit_id'";
		$sql1=mysqli_query($con,$up);
		return $sql1;
		
	}

}
?>