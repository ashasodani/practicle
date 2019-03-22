<?php


include $_SERVER['DOCUMENT_ROOT'].'/connection/connect.php';

include $_SERVER['DOCUMENT_ROOT'].'/connection/session1.php';
$adminid=$_SESSION['adminid'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/Admin/css_settings.php'; ?>
  <!-- Bootstrap Core CSS -->
  <link href="../../Admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <!-- This page CSS -->
  <!-- chartist CSS -->
  <link href="../../Admin/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
  <link href="../../Admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
  <!--c3 CSS -->
  <link href="../../Admin/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <!-- Dashboard 1 Page CSS -->
  <link href="../../Admin/css/pages/dashboard3.css" rel="stylesheet">
  <!-- You can change the theme colors from here -->
  </head>
  <body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Admin/header.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Admin/menu.php'; ?>
    <div class="page-wrapper">
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-md-12">
            <div class="card card-body">
              <h3 class="box-title m-b-0">Tour Management</h3>
              <p class="text-muted m-b-30 font-13"></p>
                <div class="row">
                  <div class="col-sm-12 col-xs-12">
                  <?php 
                $id = $_GET['id'];
                $roww = mysql_fetch_array(mysql_query("SELECT * FROM `amp_tour_management` where ID='$id'"));
                $tourname = $roww['tourname'];
                $tourcost = $roww['tourcost'];
                $tourdesc = $roww['tourdesc'];
                
                ?>

                    <form method="post" action="tourmanage.php?id=<?php echo $id;?>">

                                <?php 
                                $msg = $_GET['msg'];

                                ?>
                               <legend style="font-size:14px; color:#F00;"><?php echo $msg;?> </legend>

                            <fieldset>
                                
                                <div class="col-md-3" style="float:left"><label for="name">Tour Name: </label></div>
                                <div class="col-md-9" style="float:left"><input type="text" id="tourname" name="tourname" value="<?php echo $tourname?>" required>
                                
                                </div>
                                
                            <div class="col-md-3" style="float:left"><label for="name">Tour Cost: </label></div>
                                <div class="col-md-9" style="float:left"><input type="text" id="tourcost" name="tourcost" value="<?php echo $tourcost?>" required>
                                <label for="name" id="msgspns" style="display:none;color:#F00;" class="" >Invalid Token Name</label>

                                </div>

                                <div class="col-md-3" style="float:left"><label for="name">Tour Description: </label></div>
                                <div class="col-md-9" style="float:left"><textarea rows="4" cols="50" name="tourdesc" id="tourdesc" ><?php echo $tourdesc?></textarea>
                                
                                </div>

                        <center><input type="submit"  id="submit" name="submit" value="submit" /></a></center>

                           
                                
                              

                              <!--<button type="submit">Sign Up</button>-->
                          </fieldset>
                              

                          </form>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/Admin/footer.php'; ?>
        </div>
      </div>
    </div>

    <script src="../../Admin/assets/plugins/jquery/jquery.min.js"></script> 
    <!-- Bootstrap popper Core JavaScript --> 
    <script src="../../Admin/assets/plugins/bootstrap/js/popper.min.js"></script> 
    <script src="../../Admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <!-- slimscrollbar scrollbar JavaScript --> 
    <script src="../../Admin/js/perfect-scrollbar.jquery.min.js"></script> 
    <!--Wave Effects --> 
    <script src="../../Admin/js/waves.js"></script> 
    <!--Menu sidebar -->
    <script src="../../Admin/js/sidebarmenu.js"></script> 
    <!--Custom JavaScript --> 
    <script src="../../Admin/js/custom.min.js"></script> 
    <!-- ============================================================== --> 
    <!-- This page plugins --> 
    <!-- ============================================================== --> 
    <!--sparkline JavaScript --> 
    
    <script src="../../Admin/assets/plugins/sparkline/jquery.sparkline.min.js"></script> 
    <!--morris JavaScript --> 
    <script src="../../Admin/assets/plugins/chartist-js/dist/chartist.min.js"></script> 
    <script src="../../Admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script> 
    <!--c3 JavaScript --> 
    <script src="../../Admin/assets/plugins/d3/d3.min.js"></script> 
    <script src="../../Admin/assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS --> 
    <script src="../../Admin/js/dashboard3.js"></script> 
    <!-- ============================================================== --> 
    <!-- Style switcher --> 
    <!-- ============================================================== -->
    <script src="../../Admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

  </body>
</html>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
