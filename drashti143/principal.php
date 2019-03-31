<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome In Princepal</title>
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
 
  select 
    {
        -webkit-appearance : none;
        -moz-appearance : none;
    }

</style>
  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="list.php">Dash-board</a>
    </div>
     <ul class="nav navbar-nav">
      <li class="active"><a href="welcome.php">Home</a></li>
     
      
    </ul>
  </div>
</nav>
  <div class="container">
  <div class="col-md-6 col-md-offset-3">
              <div class="jumbotron">
                 <h2 align="center"> Search</h2>
              </div>
              <div class="well">
                 <form method="post">
                   
                  <div>  
                    <label>Enter type :</label>
                    <div class="input-group ">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <select name="type" id="type">
                      <option value="Select">Select</option>}
                      <option value="2">Teacher</option>
                      <option value="3">Student</option>
                    </select>

                    <!-- <input type="text" class="form-control" placeholder="type" name="type" id="type" tabindex="1" onblur='checkEmpty("form","name","please enter a type"'> -->

                    
                    <span style="font-size: 20px;"></span>
                    <p style="color: red;"></p>
      
                 </div> 
              
              </div>


              <br>
              <input type="button" class="btn btn-primary" value="search" id="submit3" name="submit3">
               
        
  </form>
</div>
      
  </div>
  
<div id="display1">
  <?php
  //include('displayajax.php');
  ?>

</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$("#submit3").click(function(){

  var type = $("#type").val();
  $.ajax({
    url:'displayajax.php',
    data:{'type':type},
    type:'POST',
    success:function(result)
    {
     //   alert(result);
      
        $("#display1").html(result);    
    }

  });

});
</script>