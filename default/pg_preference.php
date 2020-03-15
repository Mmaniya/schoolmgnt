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
    <title>Staff </title>

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

    <?php include('includes/topnavnew.php'); ?>

        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
            <?php include('includes/leftnavnew.php'); ?>

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
                                                    <h4>Preference Class Selected</h4>
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
                                                    <h5>Preference Subject Select</h5>
                                                    <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->


                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>

                                                </div>
                                                <div class="card-block">
                                                    <h4 class="sub-title">Basic Details</h4>
                                                    <form action="function/pgaddpreference.php" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="staffid" value="<?php echo $staffid; ?>">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Dept</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="deptname" placeholder="Type your Dept Name" value="PG"  readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Year of Experience</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="experience" placeholder="Type your Dept Name" value="<?php echo $experience; ?>"  readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Select Year</label>
                                                            <div class="col-sm-10">
                                                                <select name="selectyear" class="form-control" id="selectyear" required>
                                                                    <option value =''disabled selected>Select Year</option>
                                                                    <option value="1"> 1 Year</option>
                                                                    <option value="2"> 2 Year</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div id="firstyear">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Semester</label>
                                                                <div class="col-sm-10">
                                                                    <select name="selectsemeter" class="form-control" id="firstyearsubject" >
                                                                        <option value =''disabled selected>Select Semester</option>
                                                                        <option value="1"> 1 Semester</option>
                                                                        <option value="2"> 2 Semester</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                                <div id ="semester1">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 1</label>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject1" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 1</option>
                                                                            <option value="18NN01">OPTIMIZAION TECHNIQUES</option>
                                                                            <option value="18NN02">ADVANCED ALGORITHMS AND ANALYSIS</option>
                                                                            <option value="18NN03">ADVANCED OPERATING SYSTEM</option>
                                                                            <option value="18NN04">DATABASE TECHNOLOGIES</option>
                                                                            <option value="18NN05">SOFTWARE ENGINEERING METHODOLOGIES</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject2" class="form-control">
                                                                            <option value =''disabled selected>Select Preferred 2</option>
                                                                            <option value="18NN01">OPTIMIZAION TECHNIQUES</option>
                                                                            <option value="18NN02">ADVANCED ALGORITHMS AND ANALYSIS</option>
                                                                            <option value="18NN03">ADVANCED OPERATING SYSTEM</option>
                                                                            <option value="18NN04">DATABASE TECHNOLOGIES</option>
                                                                            <option value="18NN05">SOFTWARE ENGINEERING METHODOLOGIES</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject3" class="form-control">
                                                                            <option value =''disabled selected>Select Preferred 3</option>
                                                                            <option value="18NN01">OPTIMIZAION TECHNIQUES</option>
                                                                            <option value="18NN02">ADVANCED ALGORITHMS AND ANALYSIS</option>
                                                                            <option value="18NN03">ADVANCED OPERATING SYSTEM</option>
                                                                            <option value="18NN04">DATABASE TECHNOLOGIES</option>
                                                                            <option value="18NN05">SOFTWARE ENGINEERING METHODOLOGIES</option>
                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 1 Lab</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="labs" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred Lab </option>
                                                                            <option value="18NN51">SOFTWARE DEVELOPMENT LABORATORY</option>
                                                                            <option value="18NN81">ENGLISH FOR RESEARCH PAPER WRITING</option>                                                                                                                                     
                                                                        </select>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>

                                                            <div id ="semester2">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 2</label>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject1" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 1</option>
                                                                            <option value="18NN06">DATA ANALYTICS</option>
                                                                            <option value="18NN07">CLOUD TECHNOLOGIES</option>
                                                                            <option value="18NN08">INTERNET OF THINGS</option>
                                                                            <option value="18NN09">SCRIPTING LANGUAGES</option>
                                                                            <option value="18NN23">CRYPTOGRAPHY AND NETWORK SECURITY</option>
                                                                            <option value="18NN27">GRAPH THEORY AND ITS APPLICATIONS</option>
                                                                            <option value="18NN29">MACHINE LEARNING</option>
                                                                            <option value="18NN30">MULTICORE ARCHITECTURE</option>
                                                                            <option value="18NN32">NETWORK ANALYSIS</option>                                                                            

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject2" class="form-control">
                                                                        <option value ='' disabled selected>Select Preferred 2</option>
                                                                             <option value="18NN06">DATA ANALYTICS</option>
                                                                            <option value="18NN07">CLOUD TECHNOLOGIES</option>
                                                                            <option value="18NN08">INTERNET OF THINGS</option>
                                                                            <option value="18NN09">SCRIPTING LANGUAGES</option>
                                                                            <option value="18NN23">CRYPTOGRAPHY AND NETWORK SECURITY</option>
                                                                            <option value="18NN27">GRAPH THEORY AND ITS APPLICATIONS</option>
                                                                            <option value="18NN29">MACHINE LEARNING</option>
                                                                            <option value="18NN30">MULTICORE ARCHITECTURE</option>
                                                                            <option value="18NN32">NETWORK ANALYSIS</option>                                                                            

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject3" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 3</option>
                                                                              <option value="18NN06">DATA ANALYTICS</option>
                                                                            <option value="18NN07">CLOUD TECHNOLOGIES</option>
                                                                            <option value="18NN08">INTERNET OF THINGS</option>
                                                                            <option value="18NN09">SCRIPTING LANGUAGES</option>
                                                                            <option value="18NN23">CRYPTOGRAPHY AND NETWORK SECURITY</option>
                                                                            <option value="18NN27">GRAPH THEORY AND ITS APPLICATIONS</option>
                                                                            <option value="18NN29">MACHINE LEARNING</option>
                                                                            <option value="18NN30">MULTICORE ARCHITECTURE</option>
                                                                            <option value="18NN32">NETWORK ANALYSIS</option>                                                                            

                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 2 Lab</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="labs" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred Lab </option>
                                                                            <option value="18NN52">CLOUD COMPUTING LABORTORY</option>
                                                                            <option value="18NN61">INDUSTRIAL VISIT AND TECHNICAL SEMINAR</option>  
                                                                            <option value="18NN82">RESEARCH METHODOLOGY AND IPR</option>                                                                                                                                                                                                                                                                        
                                                                        </select>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div id="secondyear">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Semester</label>
                                                                <div class="col-sm-10">
                                                                    <select name="selectsemeter" class="form-control" id="secondyearsubject" >
                                                                        <option value =''disabled selected>Select Semester</option>
                                                                        <option value="3"> 3 Semester</option>
                                                                        <option value="4"> 4 Semester</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div id ="semester3">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 3</label>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject1" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 1</option>
                                                                            <option value="18NN21">AGENT BASED INTELLIGENT SYSTEMS</option>
                                                                            <option value="18NN22">BIO INSPIRED COMPUTATION TECHNIQUE</option>
                                                                            <option value="18NN24">ADHOC AND SENSOR NETWORKS</option>
                                                                            <option value="18NN25">DATA WAREHOUSING AND DATA MINING</option>
                                                                            <option value="18NN26">DEEP LEARNING</option>
                                                                            <option value="18NN28">INFORMATION RETRIEVAL AND WEB SEARCH</option>
                                                                            <option value="18NN31">NATURAL LANGUAGE PROCESSING</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject2" class="form-control">
                                                                        <option value ='' disabled selected>Select Preferred 2</option>
                                                                        <option value="18NN21">AGENT BASED INTELLIGENT SYSTEMS</option>
                                                                            <option value="18NN22">BIO INSPIRED COMPUTATION TECHNIQUE</option>
                                                                            <option value="18NN24">ADHOC AND SENSOR NETWORKS</option>
                                                                            <option value="18NN25">DATA WAREHOUSING AND DATA MINING</option>
                                                                            <option value="18NN26">DEEP LEARNING</option>
                                                                            <option value="18NN28">INFORMATION RETRIEVAL AND WEB SEARCH</option>
                                                                            <option value="18NN31">NATURAL LANGUAGE PROCESSING</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject3" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 3</option>
                                                                            <option value="18NN21">AGENT BASED INTELLIGENT SYSTEMS</option>
                                                                            <option value="18NN22">BIO INSPIRED COMPUTATION TECHNIQUE</option>
                                                                            <option value="18NN24">ADHOC AND SENSOR NETWORKS</option>
                                                                            <option value="18NN25">DATA WAREHOUSING AND DATA MINING</option>
                                                                            <option value="18NN26">DEEP LEARNING</option>
                                                                            <option value="18NN28">INFORMATION RETRIEVAL AND WEB SEARCH</option>
                                                                            <option value="18NN31">NATURAL LANGUAGE PROCESSING</option>

                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                            </div>
                                                            
                                                            <div id ="semester4">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 4</label>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject1" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 1</option>
                                                                            <option value="18NN72">PROJECT WORK 2</option>                                                                            
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject2" class="form-control">
                                                                        <option value ='' disabled selected>Select Preferred 2</option>  
                                                                        <option value="18NN72">PROJECT WORK 2</option>                                                                                                                                                                                                                                 
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject3" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 3</option>
                                                                            <option value="18NN72">PROJECT WORK 2</option>                                                                            
                                                                        </select>
                                                                    </div>
                                                                    </div>

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


    $("#firstyear").hide();
    $("#secondyear").hide();
    $("#fourthyear").hide();

    $("#selectyear").change(function() {
         var year = $('option:selected', this).val();

        //  alert(year);

         if (year == '1'){
             $("#firstyear").show();
         } else {
            $("#firstyear").hide();
         }
         if (year == '2'){
             $("#secondyear").show();
         } else {
            $("#secondyear").hide();
         }
        
    });



    $("#semester1").hide();
    $("#semester2").hide();

    $("#firstyearsubject").change(function() {
         var year2 = $('option:selected', this).val();
         if (year2 == '1'){
             $("#semester1").show();
         } else {
            $("#semester1").hide();
         }
         if (year2 == '2'){
             $("#semester2").show();
         } else {
            $("#semester2").hide();
         }
    });


    $("#semester3").hide();
    $("#semester4").hide();

    $("#secondyearsubject").change(function() {
         var year3 = $('option:selected', this).val();
         if (year3 == '3'){
             $("#semester3").show();
         } else {
            $("#semester3").hide();
         }
         if (year3 == '4'){
             $("#semester4").show();
         } else {
            $("#semester4").hide();
         }
    });




});

</script>
</body>

</html>
