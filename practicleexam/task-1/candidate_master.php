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
  
  <h5>This is candidate master</h5>
</div>


<form name="usrform" method="post">
<table border="1" align="center">
<tr>
  <td>name</td>
  <td><input type="text" name="name"></td>

</tr>
<tr>
<td>address</td>
<td><textarea name="address" ></textarea></td>
</tr>
<tr>
  <td>city</td>
  <td><input type="text" name="city"></td>

</tr>
<tr>
  <td>state</td>
  <td><input type="text" name="state"></td>

</tr>
<tr>
  <td>pincode</td>
  <td><input type="text" name="pincode"></td>

</tr>
<tr>
  <td>profile_type</td>
  <td><?php 
include 'connect.php';
//$id=$_GET['id'];
$q="select distinct profile_type from profile";
$r=mysqli_query($con,$q);
echo  "<select name='profile_type'>";
while($row=mysqli_fetch_array($r)){
  echo "<option value='".$row['profile_type']."'>".$row['profile_type']."</option>";
}
echo "</select>";
  ?></td>


</tr>
<tr>
  <td>career_start_date</td>
  <td><input type="date" name="career_start_date"></td>

</tr>
<tr>
  <td>DOB</td>
  <td><input type="date" name="dob"></td>

</tr>
<tr>
  <td>submit</td>
  <td><input type="submit" name="submit2"></td>

</tr>
</table>
</form>
<a href="display.php">View.data</a>

</body>
</html>
<?php
include 'connect.php';
if(isset($_POST['submit2']))
{
  $name=$_POST['name'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $pincode=$_POST['pincode'];
  $profile_type=$_POST['profile_type'];
  $career_start_date=$_POST['career_start_date'];
  $dob=$_POST['dob'];
  echo $qr="INSERT INTO `candidate`(`name`, `address`, `city`, `state`, `pincode`, `profile_type`, `career_start_date`, `dob`) VALUES ('$name','$address','$city','$state','$pincode','$profile_type','$career_start_date','$dob')";
  $r=mysqli_query($con,$qr);
  if($r)
  {
    echo "insert";
    header('location:display.php');
  }
  else
  {
    echo "no";
  }
}
?>

