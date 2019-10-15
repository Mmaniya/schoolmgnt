<?php
 session_start();
 include('../db/dpconfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="..\files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

    <?php include('includes/topnav.php'); ?>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
            <?php include('includes/leftnav.php'); ?>

                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>View PG Time Table</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Bootstrap Table</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Basic Initialization</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- Page-body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        
                                            <!-- Default ordering table start -->
                                            <div class="card">
                                                <div class="card-header">
                                                <h3>1 Year 1 Semester</h3>
                                                    <!-- <span>Lets say you want to sort the fourth column (3) descending and the first column (0) ascending: your order: would look like this: order: [[ 3, 'desc' ], [ 0, 'asc' ]]</span> -->

                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="order-table" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Monday</th>
                                                                <th>Tuesday</th>
                                                                <th>Wednesday</th>
                                                                <th>Thursday</th>
                                                                <th>Friday</th>
                                                                <th>Saturday</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php

                                                                $sql = "SELECT * FROM `pgtimetable` WHERE `status`='1' AND `dept`='PG' AND `year`='1' AND `sem`='1' ORDER BY RAND() Limit 6";
                                                                $result = $conn->query($sql);										
                                                                if ($result->num_rows > 0) {
                                                                    $i = 1;
                                                                    while($row = $result->fetch_assoc()) { ?>

                                                        <tr><td><?php 
                                                            switch ($i) {
                                                                case "1":
                                                                    echo "8.30 - 9.20";
                                                                    break;
                                                                case "2":
                                                                    echo "9.20 - 10.10";
                                                                    break;
                                                                case "3":
                                                                    echo "10.30 - 11.20";
                                                                    break;
                                                                case "4":
                                                                    echo "11.20 - 12.10";
                                                                    break;
                                                                case "5":
                                                                    echo "1.40 - 2.30";
                                                                    break;
                                                                case "6":
                                                                    echo "2.30 - 3.20";
                                                                    break;
                                                                case "7":
                                                                    echo "3.30 - 4.20";
                                                                    break;
                                                                case "8":
                                                                    echo "4.20 - 5.10";
                                                                    break;
                                                            }?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                    </tr>

                                                                        <!-- echo "<tr><td>".$row['subject']."</td><td>".$row['subject']."</td><td>".$row['subject']."</td><td>".$row['subject']."</td><td>".$row['subject']."</td><td>".$row['subject']."</td></tr>"; -->

                                                                <?php $i++; }

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
                                <!-- Page-body end -->

                                <!-- Page-body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        
                                            <!-- Default ordering table start -->
                                            <div class="card">
                                                <div class="card-header">
                                                <h3>1 Year 2 Semester</h3>
                                                    <!-- <span>Lets say you want to sort the fourth column (3) descending and the first column (0) ascending: your order: would look like this: order: [[ 3, 'desc' ], [ 0, 'asc' ]]</span> -->

                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="order-table" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Monday</th>
                                                                <th>Tuesday</th>
                                                                <th>Wednesday</th>
                                                                <th>Thursday</th>
                                                                <th>Friday</th>
                                                                <th>Saturday</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php

                                                                $sql = "SELECT * FROM `pgtimetable` WHERE `status`='1' AND `dept`='PG' AND `year`='1' AND `sem`='2' ORDER BY RAND() Limit 6";
                                                                $result = $conn->query($sql);										
                                                                if ($result->num_rows > 0) {
                                                                    $s = 1;
                                                                    while($row = $result->fetch_assoc()) { ?>

                                                        <tr><td><?php 
                                                            switch ($s) {
                                                                case "1":
                                                                    echo "8.30 - 9.20";
                                                                    break;
                                                                case "2":
                                                                    echo "9.20 - 10.10";
                                                                    break;
                                                                case "3":
                                                                    echo "10.30 - 11.20";
                                                                    break;
                                                                case "4":
                                                                    echo "11.20 - 12.10";
                                                                    break;
                                                                case "5":
                                                                    echo "1.40 - 2.30";
                                                                    break;
                                                                case "6":
                                                                    echo "2.30 - 3.20";
                                                                    break;
                                                                case "7":
                                                                    echo "3.30 - 4.20";
                                                                    break;
                                                                case "8":
                                                                    echo "4.20 - 5.10";
                                                                    break;
                                                            }?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                        <td><?php echo $row['subject']?></td>
                                                    </tr>

                                                                        <!-- echo "<tr><td>".$row['subject']."</td><td>".$row['subject']."</td><td>".$row['subject']."</td><td>".$row['subject']."</td><td>".$row['subject']."</td><td>".$row['subject']."</td></tr>"; -->

                                                              <?php $s++;  }

                                                                }                                                                                                                             
                                                                ?>
                                                           
                                                        </tbody>
                                                    
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Default ordering table end -->
                                    
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-body end -->
                                

                            </div>
                        </div>
                        <!-- Main-body end -->
                        <!-- <div id="styleSelector">

                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
<script type="text/javascript" src="..\files\bower_components\modernizr\js\css-scrollbars.js"></script>

<!-- data-table js -->
<script src="..\files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="..\files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
<script src="..\files\assets\pages\data-table\js\jszip.min.js"></script>
<script src="..\files\assets\pages\data-table\js\pdfmake.min.js"></script>
<script src="..\files\assets\pages\data-table\js\vfs_fonts.js"></script>
<script src="..\files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
<script src="..\files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
<script src="..\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
<script src="..\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
<script src="..\files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
<!-- Custom js -->
<script src="..\files\assets\pages\data-table\js\data-table-custom.js"></script>

<script src="..\files\assets\js\pcoded.min.js"></script>
<script src="..\files\assets\js\vartical-layout.min.js"></script>
<script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="..\files\assets\js\script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
