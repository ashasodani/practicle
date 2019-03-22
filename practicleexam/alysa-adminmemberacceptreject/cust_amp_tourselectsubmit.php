<?php 
include $_SERVER['DOCUMENT_ROOT'].'/connection/connect.php';

echo "<h6 style='color:red'> Your Tour Request Is Pending your ROI Income is Stop</h6>";
/*echo "You selected".$tourname;*/


  $id = $_POST['id'];
   $memberid = $_POST['memberid'];
  date_default_timezone_set("Asia/Kolkata");
 
 $dates=date("Y-m-d 23:59:59");
 $d=date("Y-m-d H:i:s");

  
  $sql="select * from amp_tour_management where id='$id'";
  $query=mysql_fetch_array(mysql_query($sql));
   $tourname=$query['tourname'];
  $tourcost=$query['tourcost'];
  $tourdesc=$query['tourdesc'];
  
    
    $qu="INSERT INTO `cust_amp_tourselect`(`entry_date`,`memberid`, `tourname`, `tourcost`, `tourdesc`) VALUES ('$d','$memberid','$tourname','$tourcost','$tourdesc')";
  $last_id = mysql_insert_id();

  $queries=mysql_query($qu);

 $sqls="SELECT * FROM `topupdetails` where memberid='$memberid'";
  $topup=mysql_fetch_array(mysql_query($sqls));
   $t_memberid=$topup['memberid'];
  $t_packagename=$topup['packagename'];
  $t_amount=$topup['amount'];
  $t_roiamount=$topup['roiamount'];
  $t_roiinterval=$topup['roiinterval'];
  $t_lastroidate=$topup['lastroidate'];
  $t_roicount=$topup['roicount'];
  $t_roidays=$topup['roidays'];
  $t_replaydate=$topup['replaydate'];



  $toproique="INSERT INTO `amp_roitopup`(`entrydate`,`memberid`, `packagename`, `amount`,`roiamount`,`roiinterval`, `lastroidate`, `roicount`, `roidays`, `replaydate`) VALUES ('$d','$t_memberid','$t_packagename','$t_amount','$t_roiamount','$t_roiinterval','$t_lastroidate','$t_roicount','$t_roidays','$t_replaydate')";
 $toproi=mysql_query($toproique);

  if(mysql_affected_rows()>0)
  {
  $qu="select * from topupdetails where memberid='$t_memberid'";
  $roiday=mysql_fetch_array(mysql_query($qu));
  $lastroidate=$roiday['lastroidate'];
  $upcoi=$roiday['roidays'];

  $touraccept="SELECT * FROM `cust_amp_tourselect` where  memberid='$t_memberid'";
  $touracceptif=mysql_fetch_array(mysql_query($touraccept));
  $statustor=$touracceptif['status'];
  $roidayt=$touracceptif['roidays'];
  if($statustor=='pending' || $statustor=='reject')
  {

      $sql="UPDATE `topupdetails` SET `roicount`='$upcoi'+'2' WHERE memberid='$t_memberid'";
      $query=mysql_query($sql);
  }
  /*$s_admin=mysql_fetch_array(mysql_query("SELECT * FROM `cust_amp_tourselect` where  memberid='$t_memberid'"));
  $statusadmin=$s_admin['status'];
  
  if($statusadmin=='reject')
  {
    if($lastroidate<$d)
    {
    echo "update".$sql="UPDATE `topupdetails` SET `lastroidate`='$dates' WHERE memberid='$t_memberid'";
          mysql_query($sql);
    }
  $asroico=mysql_fetch_array(mysql_query("SELECT * FROM `amp_roitopup` where memberid='$t_memberid'"));
    $amproicount=$asroico['roicount'];
  echo "update".$sql="UPDATE `topupdetails` SET `roicount`='$amproicount' WHERE memberid='$t_memberid'";
          $query=mysql_query($sql);
  }*/
    
    
            
          
/*  }*/
}

   
///////////////////////////////////////////////////////////////////

?>
