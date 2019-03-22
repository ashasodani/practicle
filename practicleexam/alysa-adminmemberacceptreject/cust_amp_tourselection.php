<?php 

@session_start();

include $_SERVER['DOCUMENT_ROOT'].'/connection/connect.php';

include $_SERVER['DOCUMENT_ROOT'].'/connection/session.php';
$memberid=$_SESSION['memberid'];

?>

<!DOCTYPE html>

<html lang="en">





<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/dark/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 10:21:11 GMT -->

<head>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/Admin/css_settings.php'; ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->

</head>



<body class="fix-header card-no-border fix-sidebar">

    <!-- ============================================================== -->

    <!-- Preloader - style you can find in spinners.css -->

    <!-- ============================================================== -->

    <div class="preloader">

        <div class="loader">

            <div class="loader__figure"></div>

            <p class="loader__label"><?php echo $companyname; ?></p>

        </div>

    </div>

    <!-- ============================================================== -->

    <!-- Main wrapper - style you can find in pages.scss -->

    <!-- ============================================================== -->

    <div id="main-wrapper">

        <!-- ============================================================== -->

        <!-- Topbar header - style you can find in pages.scss -->

        <!-- ============================================================== -->

      <?php include $_SERVER['DOCUMENT_ROOT'].'/Member/header.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Member/menu.php'; ?>

       <!-- ============================================================== -->

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Page wrapper  -->

        <!-- ============================================================== -->

        
        <div class="page-wrapper">
        

            <!-- ============================================================== -->

            <!-- Horizontal navbar and right sidebar toggle -->

            <!-- ============================================================== -->
         <?php include $_SERVER['DOCUMENT_ROOT'].'/Member/menu_horizontal.php'; ?>
            <!-- ============================================================== -->

            <!-- End Horizontal navbar and right sidebar toggle -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- Container fluid  -->

            <!-- ============================================================== -->

           
            <div class="container-fluid">
            

                <!-- ============================================================== -->

                <!-- Bread crumb and right sidebar toggle -->

                <!-- ============================================================== -->

                <!-- <div class="row page-titles">

                    <div class="col-md-5 align-self-center">

                        <h3 class="text-themecolor">Table basic</h3>

                    </div>

                    <div class="col-md-7 align-self-center">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                            <li class="breadcrumb-item">pages</li>

                            <li class="breadcrumb-item active">Table basic</li>

                        </ol>

                    </div>

                </div> -->

                <!-- ============================================================== -->

                <!-- End Bread crumb and right sidebar toggle -->

                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- Start Page Content -->

                <!-- ==============================================================-->
                <?php

                $sql="SELECT * FROM `amp_tour_management`";
                $query=mysql_query($sql);

             $sqls=mysql_fetch_array(mysql_query("SELECT * FROM `cust_amp_tourselect` where memberid='$memberid' ORDER by id desc limit 1"));
               
                $approve=$sqls['status'];

                 ?>
               
                 <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Tour Request</h4>
                                <div id="secc1"></div>
                                <?php 
                                if($approve== 'pending')
                                {
                                    echo "<h6 style='color:red'>You Can't Select Tour because Your Request Is pending</h6>";
                                }
                                ?>

                                <!-- <h6 class="card-subtitle">Data table example</h6> -->
                                <div id="example23_wrapper" class="dataTables_wrapper"> 
                                <div class="table-responsive m-t-40">

                                     <div id="example23_wrapper" class="dataTables_wrapper"> 
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable">
                                        <thead>

                                        <tr>
                                                <th>&nbsp;</th>
                    
                                                <th>Tour Name</th>
                                                <th>Tour Cost</th>
                                                <th>Tour Description</th>
                                                
                                               
                                      </tr>
                                    </thead>
                                    <tbody>             
                                                   <?php

                                        while($row=mysql_fetch_array($query)) 

                                        {?>
                                                      
                                            <tr>
                                            <td>

                                          
                                            <button class="btn btn-primary selectbtn div_<?php echo $row['id'];?>" data-id="<?php echo $row['id'];?>"   id="<?php echo $row['id'];?>" onclick="temp('<?php echo $memberid; ?>','<?php echo $row['id']; ?>');">Select Tour</button></td>
                                           
                                             <td><?php echo $row['tourname']; ?></td>    

                                            <td><?php echo $row['tourcost']; ?></td>

                                            <td><?php echo $row['tourdesc']; ?></td>
                                           
                                                    
                
                                        
                                    
                                        
                                                </tr>
                                    <?php


                                    }
                                    ?>
                                    </tbody>
                                    

                                    </table>

                                </div>

                            </div>

                        </div>

                       

                    </div>

                </div>
                </div>
               
                 <input type="text" id="approve" name="approve" value="<?php echo  $approve;?>" hidden>

                <!-- ============================================================== -->

                <!-- End PAge Content -->

                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- Right sidebar -->

                <!-- ============================================================== -->

                <!-- .right-sidebar -->

               
                        </div>

                    </div>

                </div>-->

                <!-- ============================================================== -->

                <!-- End Right sidebar -->

                <!-- ============================================================== -->

           
            </div>
            

            <!-- ============================================================== -->

            <!-- End Container fluid  -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- footer -->

            <!-- ============================================================== -->

          <?php include $_SERVER['DOCUMENT_ROOT'].'/Member/footer.php'; ?>
            <!-- ============================================================== -->

            <!-- End footer -->

            <!-- ============================================================== -->

        
        </div>
       

        <!-- ============================================================== -->

        <!-- End Page wrapper  -->

        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->

    <!-- End Wrapper -->

    <!-- ============================================================== -->

    <!-- ============================================================== -->

    <!-- All Jquery -->

    <!-- ============================================================== -->

    <script src="../../Member/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="../../Member/assets/plugins/bootstrap/js/popper.min.js"></script>

    <script src="../../Member/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->

    <script src="../../Member/js/perfect-scrollbar.jquery.min.js"></script>

    <!--Wave Effects -->

    <script src="../../Member/js/waves.js"></script>

    <!--Menu sidebar -->

    <script src="../../Member/js/sidebarmenu.js"></script>

    <!--stickey kit -->

    <script src="../../Member/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="../../Member/assets/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!--Custom JavaScript -->

    <script src="../../Member/js/custom.min.js"></script>

    <!-- This is data table -->

    <!-- <script src="../../Member/assets/plugins/datatables/jquery.dataTables.min.js"></script> -->

    <!-- start - This is for export functionality only -->

    
     <!-- <script src="../../Member/js/buttons/dataTables.buttons.min.js"></script> 
    <script src="../../Member/js/buttons/buttons.flash.min.js"></script> 
    <script src="../../Member/js/buttons/jszip.min.js"></script> 
    <script src="../../Member/js/buttons/pdfmake.min.js"></script> 
    <script src="../../Member/js/buttons/vfs_fonts.js"></script> 
    <script src="../../Member/js/buttons/buttons.html5.min.js"></script> 
    <script src="../../Member/js/buttons/buttons.print.min.js"></script> -->
    <!-- end - This is for export functionality only -->


    <!-- end - This is for export functionality only -->

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
    <script>

    $(document).ready(function() {
     
    /* $("[title^='Tom']")*/
    /* $(".selectbtn").hide();*/
     var approve= $("#approve").val();
    /* alert(approve);*/
     if($("#approve").val() == 'pending')
        {
           $(".selectbtn").hide();
        
        }
        else
        {
          $(".selectbtn").show();
        
        }
     $(".selectbtn").click(function(){
      //  $("^.div_").click(function(){
        /*alert("hii");*/
        
           
            

             var id1 = $(this).attr("data-id");
             

          
            $(".selectbtn").hide();
            
               
             
        });
              });
            
        function temp(memberid,id)
    {
        
  
       /* $("#"+id).toggle();*/

        /*alert(memberid);
        alert("ids"+id);*/
       /* $("#"+id).attr("disabled",false);*/
       document.getElementById(id).disabled = false;

        $.ajax({

        url:'cust_amp_tourselectsubmit.php',

        data:{'memberid':memberid,
                'id':id
               
            },

        type:'POST',

         success:function(result)

        {
            alert("your Request Under process");
             $("#secc1").html(result);

          /*window.location.reload();*/
         }

    });
       
       

    }
    </script>
    <!-- <script>
    $(document).ready(function() {
          $(".selectbtn").attr("disabled", "disabled");
        function temp(memberid,id)
    {
        
  
       /* $("#"+id).toggle();*/

        alert(memberid);
        alert(id);
        $.ajax({

        url:'cust_amp_tourselectsubmit.php',

        data:{'memberid':memberid
               
    },

        type:'POST',

         success:function(result)

        {
            alert("select");
          /*window.location.reload();*/
         }

    });
       
       

    }
    
    </script>
  -->

    <!-- ============================================================== -->

    <!-- Style switcher -->

    <!-- ============================================================== -->

    <script src="../../Member/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>





<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/dark/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 10:21:14 GMT -->

</html>