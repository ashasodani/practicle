<?php 
include $_SERVER['DOCUMENT_ROOT'].'/connection/connect.php';
if(isset($_POST['submit']))
{
  $id = $_GET['id'];
  $tourname=$_POST['tourname'];
  $tourcost=$_POST['tourcost'];
  $tourdesc=$_POST['tourdesc'];
  

  if($id !='')
  {
    mysql_query("UPDATE `amp_tour_management` SET `tourname`='$tourname',`tourcost`='$tourcost',`tourdesc`='$tourdesc' WHERE id='$id'");

    header("location:cust_amp_tourdisplay.php");

  }
  else
  {
      echo $sql="INSERT INTO `amp_tour_management`(`tourname`, `tourcost`, `tourdesc`) VALUES ('$tourname','$tourcost','$tourdesc')";
    $query=mysql_query($sql);
    if($query)
    {
      
       header('location:cust_amp_tourdisplay.php');
    }
    else
    {
      echo "no";
    }
  
  }

 
}
?>
