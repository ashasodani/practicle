


<?php
session_start();
echo "welcome ".$_SESSION['user'];
echo "<br>";
echo "<a href='logout.php'>logout</a>";
echo "<br>";
if(!isset($_SESSION['user']))
{
	header("location:form.php");
}
?>
<td><a href="form.php">add</a></td>

<form method="post">
<table>

	<tr>
	<td>name</td>
	<td><input type="text" name="name" id="name">
	</td>
</tr>
<tr>
	<td><input type="submit" name="submit1" value="search"></td>
</tr>
</table>
</form>
<table>
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>hobbies</th>
		<th>profile</th>
	</tr>
	<tr>
	<?php
$con=mysqli_connect('localhost','root','','as_');
if(isset($_POST['submit1']))
{
	$search=$_POST['name'];
	$q="select * from company where fname='$search'";
	$w=mysqli_query($con,$q);
	while($data1=mysqli_fetch_assoc($w))
	{
?>		
	<td><?php echo $data1['id']; ?></td>
	<td><?php echo $data1['fname']; ?></td>
	<td><?php echo $data1['hobbies']; ?></td>
	<td><?php echo $data1['profile']; ?></td>
	</tr>
	<?php } }?>
</table>

<hr>
<h1>Record</h1>
<table border="1">
<tr>
	<th>id</th>
	<th>fname</th>
	<th>hobbies</th>
	<th>profile</th>
	<th>action</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','','as_');
$q="select * from company";
$ra=mysqli_query($con,$q);
while($ka=mysqli_fetch_array($ra))
{
	?>
	<tr>
		<td><?php echo $ka['id'];?></td>
		<td><?php echo $ka['fname'];?></td>
		<td><?php echo $ka['hobbies'];?></td>
		<td><img src="single/<?php echo $ka['profile'];?>" height="50px" width="50px"></td>

		<td><a href="delete.php?id=<?php echo $ka['id'];?>">delete</a></td>
		<td><a href="update.php?id=<?php echo $ka['id'];?>">update</a></td>
	</tr>

	<?php
}
?>
</table>
