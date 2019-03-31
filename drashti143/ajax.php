<?php
include 'connect.php';

		$profile_type = $_POST['profile_type'];
	$sql = "select * from candidate";

	if($profile_type != '')
	{
		$sql = $sql. " where profile_type='$profile_type'";

	}
//	echo $sql;
	$r=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con)>0)
	{
?>

<div class="container">
<h1>Record</h1>
<table align="center">
	<tr>
		<td>id</td>
		<td>Name</td>
		<td>Address</td>
		<td>City</td>
		<td>State</td>
		<td>pincode</td>
		<td>Profile_type</td>
		<td>Career_start_date</td>
		<td>dob</td>
		<td>Action</td>
	</tr>
	<?php
	while($row=mysqli_fetch_array($r)) 
	{


	?>


	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['city'];?></td>
		<td><?php echo $row['state'];?></td>
		<td><?php echo $row['pincode'];?></td>
		<td><?php echo $row['profile_type'];?></td>
		<td><?php echo $row['career_start_date'];?></td>
		<td><?php echo $row['dob'];?></td>
		<td><a href="delete.php?id=<?php echo $row['id'];?>">delete</a>
		<a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
	</tr>

<?php } ?>
</table>
<a href="candidate_master.php">Add</a>
</div>
<?php } else { echo "No Data Found"; }?>