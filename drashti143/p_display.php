<!DOCTYPE html>
<html lang="en">
<head>
  <title>My site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
      .table th,tr
      {
        text-align: center;
      }
      .jumbotron
      {
        padding: 0px 0px ;
        margin-top: 20px;
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
      <div class="col-md-10 col-md-offset-1">
        <div class="jumbotron">
          <h1 align="center">View Data</h1>
        </div> 
        <div class="well">         
          <table class="table table-bordered ">
            <thead>
              <tr>
                <th>ID</th>
                <th>PROFILE_TYPE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            include 'connect.php';
            $q="select * from profile";
            $r=mysqli_query($con,$q);
            while($raw=mysqli_fetch_array($r)){
            ?>
              <tr>
                <td><?php echo $raw['id'];?></td>
                <td><?php echo $raw['profile_type'];?></td>
                
                <td>
                  
                  <a href="p_delete.php?id=<?php echo $raw['id'];?>" class="delete">
                  <button type="button" class="btn btn-danger ">Delete</button></a>&nbsp; &nbsp;
                  <a href="p_update.php?id=<?php echo $raw['id'];?>" class="update">
                  <button type="button" class="btn btn-primary ">Edit</button></a>&nbsp; &nbsp;
              
              
                  
                </td>
              </tr>
              <?php } ?>
             
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3">
              <div class="jumbotron">
                 <h2 align="center"><a href="profile_master.php">Add Profile Master</a></h2>
              </div>

</div>

    </div>
    <div id="view"></div>
</body>
</html>