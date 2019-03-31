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
   

   $('#submit2').click(function(){
      var name=$('#name').val();
      var password=$('#password').val();
      var email=$('#email').val();
      var type=$('#type').val();
      //var pincode=$('pincode').val();
     
      

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
      <li class="active"><a href="welcome.php">Home</a></li>

      <li><a href="candidate_master.php">Register</a></li>
      <li><a href="login.php">Log in</a></li>
      
    </ul>
  </div>
</nav>
<div class="container">
            <div class="col-md-6 col-md-offset-3">
              <div class="jumbotron">
                 <h2 align="center">Register</h2>
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
                    <label>E-mail :</label><span class="error">*</span>
                    <div class="input-group ">
                    <span class="input-group-addon"></i></span>
                    <input type="text" name="email" class="form-control" placeholder="abc@gmail.com" id="email" onblur='checkEmpty("form","email","please enter a email"'>

                   
                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>
              <div>  
                    <label>Password :</label><span class="error">*</span>
                    <div class="input-group ">
                    <span class="input-group-addon"></span>

                    <input type="password" class="form-control" placeholder="********" name="password" id="password" onblur='checkEmpty("form","password","please enter a password"'>

                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>
              <div>
                <label>Choose your Type:</label><span class="error">*</span>
                <fieldset data-role="controlgroup">
                  
                  <label for="princepal">Principal</label>
                  <input type="radio" name="type" id="principal" value="1" checked>
                  <label for="teacher">Teacher</label>
                  <input type="radio" name="type" id="teacher" value="2">
                  <label for="student">Student</label>
                  <input type="radio" name="type" id="student" value="3">
                </fieldset>

  <span style="font-size: 20px;"></span>
  <p style="color: red;"></p>
</div>

</div>
<input type="submit" class="btn btn-primary" value="submit" id="submit2" name="submit2" >
<input type="submit" class="btn btn-primary" name="update" value="update" id="update">
       
  </form>
</div>  
</div>




</body>
</html>


<?php
include 'connect.php';
if(isset($_POST['submit2']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $type=$_POST['type'];
 
  echo $q="INSERT INTO `stman`(`name`, `email`, `password`, `type`) VALUES ('$name','$email','$password','$type')";
  $r=mysqli_query($con,$q);
  if($r)
  {
    echo "insert";
    header('location:login.php');
  }
  else
  {
    echo "no";
  }
}
?>

