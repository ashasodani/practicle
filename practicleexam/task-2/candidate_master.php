<!DOCTYPE html>
<html lang="en">
<head>
  <title>My site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
            div.invalid {
                color: red;
                font-size: 12px;
            }
  input[type=checkbox],input[type=radio] , select
    {
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px; 
    }

  .jumbotron
    {
      padding: 0px 0px ;
      margin-top: 20px;
    }
    .error
    {
      color:red;
    }
 
  select 
    {
        -webkit-appearance : none;
        -moz-appearance : none;
    }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


 <script>
$(document).ready(function(){
   alert("hii");

   $('#submit2').click(function(){
      var name=$('#name').val();
      var address=$('#address').val();
      var city=$('#city').val();
      var state=$('#state').val();
      var pincode=$('pincode').val();
     
      

      if(name=='')
      {
        alert("please fill out first name");
        return false;
      }
      if(address=='')
      {
        alert("please fill address");
      }
      if(city=='')
      {
        alert("please fill city");
      }
      if(state=='')
      {
        alert("please fill state");
      }
      if(pincode=='')
      {
        alert("please fill pincode");
      }
      
      
      
      else
      {
        return true;
      }
   })
});
</script>
 


  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="list.php">Dash-board</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="list.php">Home</a></li>
      <li><a href="profile_master.php">profile_master</a></li>
      <li><a href="candidate_master.php">candidate_master</a></li>
      
    </ul>
  </div>
</nav>
<div class="container">
            <div class="col-md-6 col-md-offset-3">
              <div class="jumbotron">
                 <h2 align="center">Profile-Candidate</h2>
              </div>


   
<div class="well">
                 <form method="post" name="myform" >
                   
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
                include 'connect.php';
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
               <input type="submit" class="btn btn-primary" name="update" value="update" id="update">
       
  </form>
</div>  
</div>
<div class="col-md-6 col-md-offset-3">
              <div class="jumbotron">
                 <h2 align="center"><a href="display.php">View Data</a></h2>
              </div>

</div>



</body>
</html>


<?php
include 'connect.php';
if(isset($_POST['submit2']))
{
  $name=$_POST['name'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $pincode=$_POST['pincode'];
  $profile_type=$_POST['profile_type'];
  $career_start_date=$_POST['career_start_date'];
  $dob=$_POST['dob'];
  echo $q="INSERT INTO `candidate`(`name`, `address`, `city`, `state`, `pincode`, `profile_type`, `career_start_date`, `dob`) VALUES ('$name','$address','$city','$state','$pincode','$profile_type','$career_start_date','$dob')";
  $r=mysqli_query($con,$q);
  if($r)
  {
    echo "insert";
    header('location:display.php');
  }
  else
  {
    echo "no";
  }
}
?>

