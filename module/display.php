<?php
$con=mysqli_connect('localhost','root','','tspl_hr');

?>
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
	
<h1>Record</h1>
	
<!-- ///////////////////////////// -->
<?php

$sql="select * from candidate";
?>
<div id="example23_wrapper" class="dataTables_wrapper"> 
                                <div class="table-responsive m-t-40">

                                <div id="example23_wrapper" class="dataTables_wrapper">
<?php
    $thead = "<table id='example23' class='display nowrap table table-hover table-striped table-bordered dataTable'> <thead> <tr>
    <th>SR</th>
    <th>Action</th>";
    $tbody = '<tbody>';
    $query1=mysqli_query($con,$sql);
    $counter=0;
    while($row=mysqli_fetch_assoc($query1))
    {
        
        $counter++;
        $rowcounter = 0;
        $tbody = $tbody."<tr>
            <td>$counter</td>
            <td>

                  
   <button> <a class='group1' style='cursor:pointer;color:#00BFFF' onclick='deletess(".$row['id'].");'>delete</a></button>
    <button> <a class='group1' style='cursor:pointer;color:#00BFFF' onclick='updatess(".$row['id'].");'>update</a></button>
      
            </td>";

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script >
      
         function deletess(id)
    {
        alert("hello");
        alert(id);
         $.ajax({

        url:'deletess.php',

        data:{'id':id },

        type:'GET',

         success:function(data)

            {
                alert("delete");
                 $.ajax({
                                url:"display.php",
                                type:"post",
                                success:function(data){
                                    $("#secc1").html(data);
                                }
                            });

                //window.location.reload();
             }

        });
        

      
    }

    function updatess(id)
    {
        alert("hello update");
        alert(id);
        $("#update").show();
         $("#submit2").hide();
         $.ajax({
                    type:"GET",
                    url:"updatess.php",
                    data:{id},
                    success:function(data){
                        alert("insucess");
                        var decode_data=jQuery.parseJSON(data);
                        $("#id").val(decode_data.id);
                        $("#name").val(decode_data.name);
                       /* $("#address").val(decode_data.address);
                        $("#state").val(decode_data.state);
                        $("#city").val(decode_data.city);
                        $("#pincode").val(decode_data.pincode);
                    $("#career_start_date").val(decode_data.career_start_date);
                     $("#dob").val(decode_data.dob);
  */                      
                      alert(data);
                      alert(decode_data);
                    }
                

      }); 
    }


    
            

    </script>
    
</html>

