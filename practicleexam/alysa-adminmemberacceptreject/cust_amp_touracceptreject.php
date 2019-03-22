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
                

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Tour Request</h4>

                                <!-- <h6 class="card-subtitle">Data table example</h6> -->
                                <div id="example23_wrapper" class="dataTables_wrapper"> 
                                <div class="table-responsive m-t-40">

                                     <div id="example23_wrapper" class="dataTables_wrapper"> 
                                     <?php

                $sql="SELECT A.id as 'id',A.tourname as 'tourname',A.tourcost as 'tourcost',A.tourdesc as 'tourdesc',B.status as 'status' FROM `amp_tour_management` A ,cust_amp_tourselect B where B.memberid='$memberid' and A.tourcost=B.tourcost";

                $query=mysql_query($sql);
                if(mysql_affected_rows()>0){
            ?>
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable">
                                        <thead>

                                        <tr>
                    
                                                <th>Tour Name</th>
                                                <th>Tour Cost</th>
                                                <th>Tour Description</th>
                                                <th>Status</th>
                                               
                                      </tr>
                                    </thead>
                                    <tbody>             
                                                   <?php

                                        while($row=mysql_fetch_array($query)) 

                                        {?>
                                                      
                                            <tr>
                                             <td><?php echo $row['tourname']; ?></td>    

                                            <td><?php echo $row['tourcost']; ?></td>

                                            <td><?php echo $row['tourdesc']; ?></td>
                                            <td><?php 
                                            

                                            $st=$row['status'];

                                         if($st=='accept')

                                            {



                                                echo '<span style="color:green">Tour Request Accepted</span>';

                                            }
                                            if($st=='pending')

                                            {



                                                echo '<span style="color:black">Tour Request Pending</span>';

                                            }

                                      
                                            if($st=='reject')

                                            { echo '<span style="color:red">Tour Request Rejected</span>';?>


                                            <?php }?>
                                                
                                            </td>       
                                                    
                
                                        
                                    
                                        
                                                </tr>
                                    <?php


                                    }
                                    ?>
                                    </tbody>
                                    

                                    </table>
                                    <?php 
                                }else
                                {
                                    echo "No Data Found";
                                }
                                    ?>
                                
                                </div>

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

    <!-- ============================================================== -->

    <!-- Style switcher -->

    <!-- ============================================================== -->

    <script src="../../Member/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

</body>





<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/dark/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 10:21:14 GMT -->

</html>