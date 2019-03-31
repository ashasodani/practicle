
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
<?php
include 'connect.php';

$id=$_GET['id'];
$q="select *  FROM `profile` WHERE id='$id'";
$r=mysqli_query($con,$q);
//header('location:display.php');
while($row=mysqli_fetch_array($r)){

?>


<tr>
  <td>profile_type</td>
  <td><input type="text" name="profile_type" value="<?php echo $row['profile_type'];?>"></td>

</tr>
<tr>
  <td>submit</td>
  <td><input type="submit" name="submit2"></td>

</tr>
<?php } ?>
</table>
</form>


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
  echo $q="UPDATE `candidate` SET `profile_type`='$profile_type' WHERE id='$id'";
  $r=mysqli_query($con,$q);
  if($r)
  {
    //echo "insert";
    header('location:p_display.php');
  }
  else
  {
    echo "no";
  }
}
?>

