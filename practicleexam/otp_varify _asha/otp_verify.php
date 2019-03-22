<?php 
 include 'connect.php';
$memberid='100001';
$page ='fundmaster.php';  

?>

<!DOCTYPE html>

<html lang="en">      
                         <form action="otp_verify_submit.php?page=<?php echo $page;?>" method="post">

        

                            <fieldset>

                          <?php
                       /* $msg =$_GET['msg'];

                        if($msg=='2')
                        {
                          ?>
                          <label style="color: red">Your OTP is Expire</label>
                          <?php
                        }
                        elseif($msg =='3')
                        {
                          ?>
                          <label style="color: red">Please Enter Correct OTP</label>
                          <?php
                            
                        }
*/
                        ?>
                            <label id="otpmsg" style="display: none; color: green">Please Check Registred Mobile Number </label>
                      <label id="err_otp" style="display: none; color: red">OTP Already Send</label>
            
                               <div class="col-md-3" style="float:left"><label for="name">OTP : </label></div>

                                <div class="col-md-9" style="float:left"><input type="text" id="otp" name="otp" required onFocus="visible1();"></div>
                                <center><input type="submit" class="button" id="submit" value="Submit" name="submit"/></center>
                               

                             

                              

                              <!--<button type="submit">Sign Up</button>-->

                              

                          </form>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- ////////// otp-varify-ajax//////////////////// -->
<script>
  $(document).ready(function(){
    var memberid = '<?php echo $memberid;?>';
    var page = '<?php echo $page;?>';
    //alert(memberid);
    $.ajax({
      type:'POST',
      data:{'memberid':memberid,'page':page},
      url:'otp_verify_ajax.php',
      success:function(result)
      {
        if($.trim(result) == 'no')
        {
          $("#err_otp").css("display","block");
          $("#otpmsg").css("display","none");

        }
        else if($.trim(result) == 'yes'){
          $("#otpmsg").css("display","block");
          $("#err_otp").css("display","none");
          }
      }

    });
  });
$("#otp").focus(function() {
  //alert("trre");
          $("#err_otp").css("display","none");
          $("#otpmsg").css("display","none");


});
</script>
