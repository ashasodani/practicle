<?php 

@session_start();

include $_SERVER['DOCUMENT_ROOT'].'/connection/connect.php';

include $_SERVER['DOCUMENT_ROOT'].'/connection/session1.php';
$adminid=$_SESSION['adminid'];

?>
    
   
<!DOCTYPE html>

<html lang="en">





<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/dark/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 10:21:11 GMT -->

<head>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/Admin/css_settings.php'; ?>

    <link href="../../Admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <!-- This page CSS -->
  <!-- chartist CSS -->
  <link href="../../Admin/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
  <link href="../../Admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
  <!--c3 CSS -->
  <link href="../../Admin/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <!-- Dashboard 1 Page CSS -->
  <link href="../../Admin/css/pages/dashboard3.css" rel="stylesheet">
  <style>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

  </style>>

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

     <?php include $_SERVER['DOCUMENT_ROOT'].'/Admin/header.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Admin/menu.php'; ?>

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
        
        <?php include 'menu_horizontal.php'; ?>
        
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

                <!-- ============================================================== -->

                <?php

                $sql="SELECT * FROM `pinallocation`";

                $query=mysql_query($sql);





                ?>

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="col-md-12">
                                <div class="col-md-8" style="float: left;">
                                <h4 class="card-title">Tour Management</h4>
                            </div>
                         
</div>
                                    <div id="example23_wrapper" class="dataTables_wrapper"> 
                                       <div class="width3"><a href="cust_amp_tourmanagement.php"><input type="button" class="button" id="addnew" value="Add New Entry" name="addnew"/></a></div>  
                                <!-- <h6 class="card-subtitle">Data table example</h6> -->
                               
                               <div class="table-responsive m-t-40">
                              <div id="example23_wrapper" class="dataTables_wrapper">
                              <table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable">

                                        <thead>
                                                <th class='table_texxx'>Tour Name</th>
                                                <th class='table_texxx'>Tour Cost</th>
                                                <th class='table_texxx'>Tour Description</th>
                                               
                                               
                                        </thead>
                                        <tbody>

                                        <?php

                                        while($row=mysql_fetch_array($query)) 

                                        {?>

                                        <tr style="background-color:#dedbdb;" >
                                             
                                            <td><?php echo $row['noofpin']; ?></td>
              <td><?php echo $row['packagename']; ?></td>
              <td><?php echo $row['remarks']; ?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                        

                                    </table>

                                </div>

                            </div>

                        </div>

                       

                    </div>

                </div>

                <!-- ============================================================== -->

                <!-- End PAge Content -->

                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- Right sidebar -->

                <!-- ============================================================== -->

                <!-- .right-sidebar -->

                <!--<div class="right-sidebar">

                    <div class="slimscrollright">

                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>

                        <div class="r-panel-body">

                            <ul id="themecolors" class="m-t-20">

                                <li><b>With Light sidebar</b></li>

                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>

                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>

                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>

                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>

                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>

                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>

                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>

                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>

                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>

                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>

                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>

                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>

                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme working">12</a></li>

                            </ul>

                            <ul class="m-t-20 chatonline">

                                <li><b>Chat option</b></li>

                                <li>

                                    <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>

                                </li>

                            </ul>

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

           
           <?php include 'footer.php'; ?>
           

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

    <script src="../../Admin/assets/plugins/jquery/jquery.min.js"></script> 
    <!-- Bootstrap popper Core JavaScript --> 
    <script src="../../Admin/assets/plugins/bootstrap/js/popper.min.js"></script> 
    <script src="../../Admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <!-- slimscrollbar scrollbar JavaScript --> 
    <script src="../../Admin/js/perfect-scrollbar.jquery.min.js"></script> 
    <!--Wave Effects --> 
    <script src="../../Admin/js/waves.js"></script> 
    <!--Menu sidebar -->
    <script src="../../Admin/js/sidebarmenu.js"></script> 
    <!--Custom JavaScript --> 
    <script src="../../Admin/js/custom.min.js"></script> 
    <!-- ============================================================== --> 
    <!-- This page plugins --> 
    <!-- ============================================================== --> 
    <!--sparkline JavaScript --> 
    
    <script src="../../Admin/assets/plugins/sparkline/jquery.sparkline.min.js"></script> 
    <!--morris JavaScript --> 
    <script src="../../Admin/assets/plugins/chartist-js/dist/chartist.min.js"></script> 
    <script src="../../Admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script> 
    <!--c3 JavaScript --> 
    <script src="../../Admin/assets/plugins/d3/d3.min.js"></script> 
    <script src="../../Admin/assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS --> 
    <script src="../../Admin/js/dashboard3.js"></script> 
    <!-- ============================================================== --> 
    <!-- Style switcher --> 
    <!-- ============================================================== -->
    <script src="../../Admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <!-- start - This is for export functionality only -->
    
    <script src="../../../Admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../Admin/js/buttons/dataTables.buttons.min.js"></script>  

<!-- start - This is for export functionality only --> 


<script src="../../../Admin/js/buttons/buttons.flash.min.js"></script> 
<script src="../../../Admin/js/buttons/jszip.min.js"></script> 
<script src="../../../Admin/js/buttons/pdfmake.min.js"></script> 
<script src="../../../Admin/js/buttons/vfs_fonts.js"></script> 
<script src="../../../Admin/js/buttons/buttons.html5.min.js"></script> 
<script src="../../../Admin/js/buttons/buttons.print.min.js"></script>
  
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

    <!-- ============================================================== -->

    <!-- Style switcher -->

    <!-- ============================================================== -->

    <script src="../../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>





<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/dark/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 10:21:14 GMT -->

</html>