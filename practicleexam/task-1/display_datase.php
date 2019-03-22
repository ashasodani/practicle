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
      <li class="active"><a href="list.php">Home</a></li>
      <li><a href="profile_master.php">profile_master</a></li>
      <li><a href="candidate_master.php">candidate_master</a></li>
      
    </ul>
  </div>
</nav>
	<div class="container">
	 		<h3>Welcome</h3>
	</div>
	<div>
		
<h1>Record</h1>
	
<!-- ///////////////////////////// -->
<?php
include 'connect.php';
$sql="select * from candidate";
?>
<div id="example23_wrapper" class="dataTables_wrapper"> 
                                <div class="table-responsive m-t-40">

                                <div id="example23_wrapper" class="dataTables_wrapper">
<?php
    $thead = "<table id='data-table' class='table'> <thead> <tr>
    <th>SR</th>";
    $tbody = '<tbody>';
    $query1=mysqli_query($con,$sql);
    $counter=0;
    while($row=mysqli_fetch_assoc($query1))
    {
        $counter++;
        $rowcounter = 0;
        $tbody = $tbody."<tr>
            <td>$counter</td>";
        foreach ($row as $key => $value)
        {
            if($rowcounter>-1)
            {
                if($counter==1)
                {
                    $thead = $thead."<th class='search_txt'>". strtoupper($key)."</th>";
                }
                $tbody = $tbody."<td>".$value."</td>";
            }
            $rowcounter++;
        }
        $tbody = $tbody."</tr>";
    }
    $thead = $thead."</tr></thead>";
    $tbody = $tbody.'</tbody></table>';
    echo $thead.$tbody;
?>
<!-- ///////////////////////////// -->

	
	
<a href="candidate_master.php">Add</a>
</div>
</body>
</html>

