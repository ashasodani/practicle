<?php
$con=mysql_connect("localhost","root","","a_asha");
include 'control.php';
$did=$_GET['did'];
$w=new model();
$ww=$w->delete($did)

?>

