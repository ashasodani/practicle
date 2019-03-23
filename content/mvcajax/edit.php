<?php
		include 'control.php';
		
		
		$edit_id=$_POST['userid'];
	
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$gender=$_POST['gender'];
		$education=$_POST['education'];
		
		$a = new control();
		$b = $a->edit($edit_id,$fname,$lname,$gender,$education);
			
	?>