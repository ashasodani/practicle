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
<div class="container">
<table align="center">
<tr>
<td>id</td>
<td>Profile_type</td>

<td>Action</td>
</tr>
<?php
include 'connect.php';
$q="select * from profile";
$r=mysqli_query($con,$q);
while ($row=mysqli_fetch_array($r)) {


?>


<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['profile_type'];?></td>
		<td><a href="p_delete.php?id=<?php echo $row['id'];?>">delete</a>
		<a href="p_update.php?id=<?php echo $row['id'];?>">update</a></td>
</tr>

<?php } ?>
</table>
</div>
</body>
</html>