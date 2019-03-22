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
  
  <h6>This is profile master</h6>
</div>
<div class ="container">
<table border="1">
<form method="post">
<tr>
<td>Profile_type</td>
<td><input type="text" name="profile_type"></td>
</tr>
<tr>
<td>submit</td>
<td><input type="submit" name="submit1"></td>
</tr>

</form>
</table>
</div>
<a href="p_display.php">view data</a>
</body>
</html>
<?php 
include 'connect.php';
if(isset($_POST['submit1']))
{
  $profile_type=$_POST['profile_type'];
  echo $q="insert into profile (profile_type) values ('$profile_type')";
  $r=mysqli_query($con,$q);
  if($r){
    echo "insert";
    header('location:candidate_master.php');
  }
  else
  {
    echo "no";
  }
}
?>
