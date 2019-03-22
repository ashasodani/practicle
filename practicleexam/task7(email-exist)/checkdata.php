<?php

$con=mysqli_connect('localhost','root','','as_');

if(isset($_POST['username']))
{
 $username=$_POST['username'];

 $checkdata=" SELECT username FROM user WHERE username='$username' ";

 $query=mysqli_query($con,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "User Name Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}

if(isset($_POST['useremail']))
{
 $emailId=$_POST['useremail'];

 $checkdata=" SELECT useremail FROM user WHERE useremail='$emailId' ";

 $query=mysqli_query($con,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "Email Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}
?>
