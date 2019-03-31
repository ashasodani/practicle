  <?php
include 'connect.php';
	$type = $_POST['type'];
	$sql = "select * from stman where type='$type'";


	
$sql;
	$r=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con)>0)
	{
?>

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
                <th>NAME</th>
                <th>Email</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            while($raw=mysqli_fetch_array($r)){
            ?>
              <tr>
                <td><?php echo $raw['id'];?></td>
                <td><?php echo $raw['name'];?></td>
                <td><?php echo $raw['email'];?></td>
                <td>
                  <a href="delete.php?id=<?php echo $raw['id'];?>" class="delete">
                  <button type="button" class="btn btn-danger ">Delete</button></a>&nbsp; &nbsp;
                  <a href="update.php?id=<?php echo $raw['id'];?>" class="update">
                  <button type="button" class="btn btn-primary ">Edit</button></a>&nbsp; &nbsp;
              
              
                  
                </td>
              </tr>
              
             
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>
      <div class="col-md-6 col-md-offset-3">
              <div class="jumbotron">
                 <h2 align="center"><a href="candidate_master.php">Add Candidate Master</a></h2>
              </div>

</div>

    </div>
    <?php } else { echo "No Data Found"; }?>

