
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="list.php">Dash-board</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="welcome.php">Home</a></li>
      <li><a href="candidate_master.php">profile_master</a></li>
      <li><a href="login.php">candidate_master</a></li>
      
    </ul>
  </div>
</nav>
<?php
include 'connect.php';

        session_start();
        if(!isset($_SESSION['name']))
        {
                header("location: login.php");
        }
        else
        {
          echo "hello ".$_SESSION['name']."<br>";
        }
?>
  
<div class="container">
  <h3>Welcome</h3>
  
  <h3><a href="logout.php">Click here to log out</a></h3>
</div>

</body>
</html>
