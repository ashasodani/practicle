<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="list.php">Dash-board</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="welcome.php">Home</a></li>
      <li><a href="candidate_master.php">Register</a></li>
      <li><a href="login.php">Log in</a></li>
      
    </ul>
  </div>
</nav>
<style>
table {
    border-collapse: collapse;
    width: 30%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body>
<table border="1">
<form method="post" >

<tr>
<td>UserName</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="password"></td>
</tr>
<tr>
<td>submit</td>
<td><input type="submit" name="submit"></td>
</tr>
</form>
</table>
</body>
</html>
<?php
include 'connect.php';
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$q="select * from stman where name='$name' AND password='$password'";
	
	$r=mysqli_query($con,$q);
	$e=mysqli_fetch_assoc($r);

	if ($e['type'] == '2') {
		
		if($e)
		{
			//echo "got it";
		    $_SESSION['name']=$name;

			header("location:teacher.php");

		}
	}
		elseif ($e['type'] == '1') {
			if($e)
		{
			//echo "got it";
		    $_SESSION['name']=$name;

			header("location:principal.php");
		}
	}
		elseif ($e['type'] == '3') {
			if($e)
		{
			//echo "got it";
		    $_SESSION['name']=$name;

			header("location:student.php");

		}
		
		}
		else{
			echo "Try again";
		}

}

?>