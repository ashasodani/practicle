<!DOCTYPE html>
<html lang="en">
<head>
  <title>My site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

	<div class="container">
	 		<h3>Welcome</h3>
	</div>
	<div>
	  <?php include 'css_settings.php'; ?>	
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
    $thead = "<table id='example23' class='display nowrap table table-hover table-striped table-bordered dataTable'> <thead> <tr>
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
</div>
</div>
</div>

<!-- ///////////////////////////// -->

	
	
<a href="candidate_master.php">Add</a>
</div>
</body>
 <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->

    <script src="js/perfect-scrollbar.jquery.min.js"></script>

    <!--Wave Effects -->

    <script src="js/waves.js"></script>

    <!--Menu sidebar -->

    <script src="js/sidebarmenu.js"></script>

    <!--stickey kit -->

    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!--Custom JavaScript -->

    <script src="js/custom.min.js"></script>

    <!-- This is data table -->

    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- start - This is for export functionality only -->

    
     <script src="js/buttons/dataTables.buttons.min.js"></script> 
    <script src="js/buttons/buttons.flash.min.js"></script> 
    <script src="js/buttons/jszip.min.js"></script> 
    <script src="js/buttons/pdfmake.min.js"></script> 
    <script src="js/buttons/vfs_fonts.js"></script> 
    <script src="js/buttons/buttons.html5.min.js"></script> 
    <script src="js/buttons/buttons.print.min.js"></script> 
   <script>

    $(document).ready(function() {

        $('#myTable').DataTable();

        $(document).ready(function() {

            var table = $('#example').DataTable({

                "columnDefs": [{

                    "visible": false,

                    "targets": 2

                }],

                "order": [

                    [2, 'asc']

                ],

                "displayLength": 25,

                "drawCallback": function(settings) {

                    var api = this.api();

                    var rows = api.rows({

                        page: 'current'

                    }).nodes();

                    var last = null;

                    api.column(2, {

                        page: 'current'

                    }).data().each(function(group, i) {

                        if (last !== group) {

                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');

                            last = group;

                        }

                    });

                }

            });

            // Order by the grouping

            $('#example tbody').on('click', 'tr.group', function() {

                var currentOrder = table.order()[0];

                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {

                    table.order([2, 'desc']).draw();

                } else {

                    table.order([2, 'asc']).draw();

                }

            });

        });

    });

    $('#example23').DataTable({

        dom: 'lBfrtip',

        buttons: [

            'copy', 'csv', 'excel', 'pdf', 'print'

        ]

    });

    </script>
    
</html>

