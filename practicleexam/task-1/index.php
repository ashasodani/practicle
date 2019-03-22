<html>
<head>
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
<td><input type="text" name="username"></td>
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
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="select * from login where username='$username' AND password='$password'";
	$r=mysqli_query($con,$q);
	$e=mysqli_fetch_assoc($r);
		if($e)
		{
			//echo "got it";
				$_SESSION['username']=$username;

			header("location:menu.php");

		}
		else
		{
			echo "try again";
		}



}
?>