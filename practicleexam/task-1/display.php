<!DOCTYPE html>
<html lang="en">
<head>
  <title>My site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="list.php">Dash-board</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="list.php">Home</a></li>
      <li><a href="profile_master.php">profile_master</a></li>
      <li><a href="candidate_master.php">candidate_master</a></li>
      
    </ul>
  </div>
</nav>
	<div class="container">
	 		<h3>Welcome</h3>
	</div>
	<div>
		<table>
			<form method="post">
				<tr>
					<td>Enter profile type</td>
					<td><input type="text" name="profile_type" id="profile_type"></td>
				</tr>
				<tr>
					<td>submit</td>
					<td><input type="submit" name="submit3" value="search">
				</tr>
			</form>
		</table>
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
			include 'connect.php';
			if(isset($_POST['submit3']))
			{
			$search=$_POST['profile_type'];
			$q="select * from candidate where profile_type='$search'";
			$r=mysqli_query($con,$q);
			while ($row=mysqli_fetch_array($r)) {


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

			<?php }} ?>
			</table>

				
</div>
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
	include 'connect.php';
	$q="select * from candidate";
	$r=mysqli_query($con,$q);
	while ($row=mysqli_fetch_array($r)) {


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
</body>
</html>