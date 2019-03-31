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
      <li class="active"><a href="list.php">Home</a></li>
      <li><a href="profile_master.php">profile_master</a></li>
      <li><a href="candidate_master.php">candidate_master</a></li>
      
    </ul>
  </div>
</nav>
	<div class="container">
	<div class="col-md-6 col-md-offset-3">
              <div class="jumbotron">
                 <h2 align="center"> Search for Profile-Candidate</h2>
              </div>
              <div class="well">
                 <form method="post">
                   
                  <div>  
                    <label>Enter Profile_type :</label>
                    <div class="input-group ">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                    <input type="text" class="form-control" placeholder="profile_type" name="profile_type" id="profile_type" tabindex="1" onblur='checkEmpty("form","name","please enter a profile_type"'>

                    
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

	var profile_type = $("#profile_type").val();
	$.ajax({
		url:'displayajax.php',
		data:{'profile_type':profile_type},
		type:'POST',
		success:function(result)
		{
		 //   alert(result);
		  
				$("#display1").html(result);		
		}

	});

});
</script>