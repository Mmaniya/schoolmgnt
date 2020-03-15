<?php  include('../db/dpconfig.php');
$staffid = $_REQUEST['myid'];
$sql = "SELECT * FROM `staff` WHERE id='$staffid'";
 $result = $conn->query($sql);										
 if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
         $name = $row["name"];	
         $id = $row["id"];	
         $email = $row['email'];
         $mobile = $row['mobile'];
         $address = $row['address'];
         $password = $row['password'];
         $experience = $row['experience'];
         $imageURL = 'function/uploads/'.$row['profile'];
     }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student </title>

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


    <?php include('includes/topnavstu.php'); ?>

    <!-- Sidebar inner chat end-->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
        <?php include('includes/leftnavstu.php'); ?>

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
                                                    <h4>Popularity school</h4>
                                                    <!-- <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Popularity school</h5>
                                                    <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->


                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>

                                                </div>
                                                <div class="card-block">
                                                    <h4 class="sub-title">Basic Details</h4>
                                                    <form action="function/search.php" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="staffid" value="<?php echo $staffid; ?>">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Number of Students</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="stuname" placeholder="No of Students" value="" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Number of Staffs</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="staffname" placeholder="No of Staff" value="" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Year of Running</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="experience" placeholder="Year of Runninge" value="" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Sector</label>
                                                            <div class="col-sm-10">
                                                                <select name="selectyear" class="form-control" id="selectyear" >
                                                                    <option value ='' disabled selected>Select Sector</option>
                                                                    <option value="private">Private</option>
                                                                    <option value="goverment">Goverment</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Education</label>
                                                            <div class="col-sm-10">
                                                                <select name="selectedu" class="form-control" id="selectedu" >
                                                                    <option value =''disabled selected>Select Education</option>
                                                                    <option value="gendral">Go Education</option>
                                                                    <option value="boys">Boys Student</option>
                                                                    <option value="girls">Girls Student</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Popularity</label>
                                                            <div class="col-sm-10">
                                                                <select name="popularity" class="form-control" id="popularity" >
                                                                    <option value =''disabled selected>Select Popularity</option>
                                                                    <option value="5"> 5 star</option>
                                                                    <option value="4"> 4 star</option>
                                                                    <option value="3"> 3 star</option>
                                                                    <option value="2"> 2 star</option>
                                                                    <option value="1"> 1 star</option>
                                                                </select>
                                                            </div>
                                                        </div>
        
                                                        
                                                        <div class="row">
                                                            <div class="offset-lg-3 col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn-grd-primary btn-block" value="Submit">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                             
                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
                                            
                                        </div>
                                
                              
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
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

<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
<script type="text/javascript" src="..\files\bower_components\modernizr\js\css-scrollbars.js"></script>

<!-- i18next.min.js -->
<script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
<!-- Custom js -->

<script src="..\files\assets\js\pcoded.min.js"></script>
<script src="..\files\assets\js\vartical-layout.min.js"></script>
<script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="..\files\assets\js\script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
$(function() {


    // $("#secondyear").hide();
    // $("#thirdyear").hide();
    // $("#fourthyear").hide();

    // $("#selectyear").change(function() {
    //      var year = $('option:selected', this).val();

    //     //  alert(year);

    //      if (year == '2'){
    //          $("#secondyear").show();
    //      } else {
    //         $("#secondyear").hide();
    //      }
    //      if (year == '3'){
    //          $("#thirdyear").show();
    //      } else {
    //         $("#thirdyear").hide();
    //      }
    //      if (year == '4'){
    //          $("#fourthyear").show();
    //      } else {
    //         $("#fourthyear").hide();
    //      }
    // });



    // $("#semester3").hide();
    // $("#semester4").hide();

    // $("#secondyearsubject").change(function() {
    //      var year2 = $('option:selected', this).val();
    //      if (year2 == '3'){
    //          $("#semester3").show();
    //      } else {
    //         $("#semester3").hide();
    //      }
    //      if (year2 == '4'){
    //          $("#semester4").show();
    //      } else {
    //         $("#semester4").hide();
    //      }
    // });


    // $("#semester5").hide();
    // $("#semester6").hide();

    // $("#thirdyearsubject").change(function() {
    //      var year3 = $('option:selected', this).val();
    //      if (year3 == '5'){
    //          $("#semester5").show();
    //      } else {
    //         $("#semester5").hide();
    //      }
    //      if (year3 == '6'){
    //          $("#semester6").show();
    //      } else {
    //         $("#semester6").hide();
    //      }
    // });

    // $("#semester7").hide();
    // $("#semester8").hide();

    // $("#fourthyearsubject").change(function() {
    //      var year4 = $('option:selected', this).val();
    //      if (year4 == '7'){
    //          $("#semester7").show();
    //      } else {
    //         $("#semester7").hide();
    //      }
    //      if (year4 == '8'){
    //          $("#semester8").show();
    //      } else {
    //         $("#semester8").hide();
    //      }
    // });



});

</script>
</body>

</html>
