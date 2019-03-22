<?php
$con=mysqli_connect('localhost','root','','tspl_hr');
include "template.php";
?>
<body>



   
<div class="well">
                 <form method="post" name="myform" id="myform">
                   
                  <div>  
                    <label >Name:</label><span class="error">*</span>
                    <div class="input-group ">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                    <input type="text" class="form-control" placeholder="Name" name="name" id="name" tabindex="1" onblur='checkEmpty("form","name","please enter name"'>

                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>
              <div>  
                  <label>Address :</label><span class="error">*</span>
                    <div class="input-group ">
                    <span class="input-group-addon"></i></span>
                    <textarea name="address" class="form-control" placeholder="address" id="address" onblur='checkEmpty("form","address","please enter a address"'></textarea>

                   
                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>
              <div>  
                    <label>City :</label><span class="error">*</span>
                    <div class="input-group ">
                    <span class="input-group-addon"></span>

                    <input type="text" class="form-control" placeholder="city" name="city" id="city" tabindex="1" onblur='checkEmpty("form","name","please enter a city"'>

                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>
              <div>  
                    <label>State :</label><span class="error">*</span>
                    <div class="input-group ">
                    <span class="input-group-addon"></span>

                    <input type="text" class="form-control" placeholder="state" name="state" id="state" tabindex="1" onblur='checkEmpty("form","state","please enter a state"'>

                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>
              <div>  
                    <label>Pincode :</label><span class="error">*</span>
                    <div class="input-group ">
                    <span class="input-group-addon"></span>

                    <input type="text" class="form-control" placeholder="pincode" name="pincode" id="pincode" tabindex="1" onblur='checkEmpty("form","pincode","please enter a pincode"'>

                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>
             <div> 
                <label>Profile_type:</label>
                <div class="input-group ">
                    <span class="input-group-addon"></span>

               

                <div class="input-group ">
                <?php 
               
                $q="select distinct profile_type from profile";
                $r=mysqli_query($con,$q);
                  echo "<select  name='profile_type' id='profile_type' tabindex='1'  >";
                  while($row=mysqli_fetch_array($r)){
                    echo "<option value='".$row['profile_type']."'>".$row['profile_type']."</option>";
                    echo "<option value='".$row['profile_type']."'>".$row['profile_type']."</option>";
                  }
                     
                 echo "</select>";?>
                </div>
                

                    <span style="font-size: 20px;"></span>
                     <p style="color: red;"></p>
      
              </div> 
              </div>
               <br> 


              <div>  
                    <label>Career_start_date:</label>
                    <div class="input-group ">
                    <span class="input-group-addon"></i></span>

                    <input type="date" class="form-control" placeholder="career_start_date" name="career_start_date" id="career_start_date" tabindex="1" onblur='checkEmpty("form","career_start_date","please enter a career_start_date"'>

                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>


              <div>  
                    <label>Bday:</label>
                    <div class="input-group ">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                    <input type="date" class="form-control" placeholder="dob" name="dob" id="dob" tabindex="1" onblur='checkEmpty("form","dob","please enter a dob"'>

                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>


              


                  
      
               

               <input type="button" class="btn btn-primary" value="submit" id="submit2" name="submit2" >
               <input type="button" class="btn btn-primary" name="update" value="update" id="update">
       
  </form>
</div>  
</div>
<div id="secc1">
  </div>



</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


 <script>
$(document).ready(function(){
   

   $('#submit2').click(function(){
      var name=$('#name').val();
      var address=$('#address').val();
      var city=$('#city').val();
      var state=$('#state').val();
      var pincode=$('#pincode').val();
     var profile_type=$('#profile_type').val();
     var career_start_date=$('#career_start_date').val();
     var dob=$('#dob').val();
   
      $.ajax({

        url:'homeajax.php',

        data:{'name':name,
                'address':address,
                'state':state,
                'city':city,
                'pincode':pincode,
                'profile_type':profile_type,
                'career_start_date':career_start_date,
                'dob':dob
               
            },

        type:'POST',

         success:function(result)

        {
            
             $("#secc1").html(result);

          /*window.location.reload();*/
       }

    });
       
      
     $("#myform")[0].reset();
     
   });
});
</script>
 
