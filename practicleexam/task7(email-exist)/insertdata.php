<?php
$con=mysqli_connect('localhost','root','','as_');
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $useremail=$_POST['useremail'];
  $userpass=$_POST['userpass'];
  $q="INSERT INTO `user`(`username`, `useremail`, `userpass`) VALUES ('$username','$useremail','$userpass')";
  $r=mysqli_query($con,$q);
  if($r)
  {
    echo "insert";
  }
  else
  {
    echo "no";
  }
}
?>