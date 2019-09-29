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
                                                    <form action="function/addpreference.php" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="staffid" value="<?php echo $staffid; ?>">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Dept</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="deptname" placeholder="Type your Dept Name" value="UG"  readonly>
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
                                                                    <option value="2"> 2 Year</option>
                                                                    <option value="3"> 3 Year</option>
                                                                    <option value="4"> 4 Year</option>
                                                                </select>
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
                                                                            <option value="15I301">Linear algebra and numerical analysis</option>
                                                                            <option value="15I302">Computer architecture</option>
                                                                            <option value="15I303">Data structures</option>
                                                                            <option value="15I304">Analog and digital communication</option>
                                                                            <option value="15I305">Environmental science and engineering</option>
                                                                            <option value="15I070">Economic for engineering</option>                                                                    
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject2" class="form-control">
                                                                            <option value =''disabled selected>Select Preferred 2</option>
                                                                            <option value="15I301">Linear algebra and numerical analysis</option>
                                                                            <option value="15I302">Computer architecture</option>
                                                                            <option value="15I303">Data structures</option>
                                                                            <option value="15I304">Analog and digital communication</option>
                                                                            <option value="15I305">Environmental science and engineering</option>
                                                                            <option value="15I070">Economic for engineering</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject3" class="form-control">
                                                                            <option value =''disabled selected>Select Preferred 3</option>
                                                                            <option value="15I301">Linear algebra and numerical analysis</option>
                                                                            <option value="15I302">Computer architecture</option>
                                                                            <option value="15I303">Data structures</option>
                                                                            <option value="15I304">Analog and digital communication</option>
                                                                            <option value="15I305">Environmental science and engineering</option>
                                                                            <option value="15I070">Economic for engineering</option>
                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 3 Lab</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="labs" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred Lab </option>
                                                                            <option value="15I310">Data structures laboratory</option>
                                                                            <option value="15I311">Digital logic design laboratory</option>                                                                                                                                     
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
                                                                            <option value="15I401">Probability, statistics and random processes</option>
                                                                            <option value="15I402">Digital signal processing</option>
                                                                            <option value="15I403">Operating systems</option>
                                                                            <option value="15I404">Database management systems</option>
                                                                            <option value="15I405">Software engineering</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject2" class="form-control">
                                                                        <option value ='' disabled selected>Select Preferred 2</option>
                                                                            <option value="15I401">Probability, statistics and random processes</option>
                                                                            <option value="15I402">Digital signal processing</option>
                                                                            <option value="15I403">Operating systems</option>
                                                                            <option value="15I404">Database management systems</option>
                                                                            <option value="15I405">Software engineering</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject3" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 3</option>
                                                                            <option value="15I401">Probability, statistics and random processes</option>
                                                                            <option value="15I402">Digital signal processing</option>
                                                                            <option value="15I403">Operating systems</option>
                                                                            <option value="15I404">Database management systems</option>
                                                                            <option value="15I405">Software engineering</option>
                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 4 Lab</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="labs" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred Lab </option>
                                                                            <option value="15I410">Operating systems laboratory</option>
                                                                            <option value="15I411">Database management systems laboratory</option>                                                                                                                                     
                                                                        </select>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div id="thirdyear">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Semester</label>
                                                                <div class="col-sm-10">
                                                                    <select name="selectsemeter" class="form-control" id="thirdyearsubject" >
                                                                        <option value =''disabled selected>Select Semester</option>
                                                                        <option value="5"> 5 Semester</option>
                                                                        <option value="6"> 6 Semester</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div id ="semester5">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 5</label>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject1" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 1</option>
                                                                            <option value="15I501">Microprocessors and interfacing</option>
                                                                            <option value="15I502">Computer communication networks</option>
                                                                            <option value="15I503">Object oriented modelling and design</option>
                                                                            <option value="15I504">Java programming</option>
                                                                            <option value="15I505">Design and analysis of algorithms</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject2" class="form-control">
                                                                        <option value ='' disabled selected>Select Preferred 2</option>
                                                                            <option value="15I501">Microprocessors and interfacing</option>
                                                                            <option value="15I502">Computer communication networks</option>
                                                                            <option value="15I503">Object oriented modelling and design</option>
                                                                            <option value="15I504">Java programming</option>
                                                                            <option value="15I505">Design and analysis of algorithms</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject3" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 3</option>
                                                                            <option value="15I501">Microprocessors and interfacing</option>
                                                                            <option value="15I502">Computer communication networks</option>
                                                                            <option value="15I503">Object oriented modelling and design</option>
                                                                            <option value="15I504">Java programming</option>
                                                                            <option value="15I505">Design and analysis of algorithms</option>
                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 5 Lab</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="lab" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred Lab </option>
                                                                            <option value="15I510">Microprocessors and interfacing laboratory</option>
                                                                            <option value="15I511">Java programming laboratory</option>                                                                                                                                     
                                                                        </select>
                                                                    </div>                                                            
                                                                </div>
                                                            </div>
                                                            
                                                            <div id ="semester6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 6</label>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject1" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 1</option>
                                                                            <option value="15I601">Advanced data structures</option>
                                                                            <option value="15I602">Theory of computing</option>
                                                                            <option value="15I603">Web technologies</option>
                                                                            <option value="15I604">Mobile communication and computing</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject2" class="form-control">
                                                                        <option value ='' disabled selected>Select Preferred 2</option>
                                                                            <option value="15I601">Advanced data structures</option>
                                                                            <option value="15I602">Theory of computing</option>
                                                                            <option value="15I603">Web technologies</option>
                                                                            <option value="15I604">Mobile communication and computing</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject3" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 3</option>
                                                                            <option value="15I601">Advanced data structures</option>
                                                                            <option value="15I602">Theory of computing</option>
                                                                            <option value="15I603">Web technologies</option>
                                                                            <option value="15I604">Mobile communication and computing</option>
                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 6 Lab</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="lab" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred Lab </option>
                                                                            <option value="15I610">Advanced data structures laboratory</option>
                                                                            <option value="15I611">Open source computing laboratory</option>                                                                                                                                     
                                                                        </select>
                                                                    </div>                                                            
                                                                </div>
                                                             </div>

                                                        </div>

                                                        <div id="fourthyear">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Semester</label>
                                                                <div class="col-sm-10">
                                                                    <select name="selectsemeter" class="form-control" id="fourthyearsubject" >
                                                                        <option value =''disabled selected>Select Semester</option>
                                                                        <option value="7"> 7 Semester</option>
                                                                        <option value="8"> 8 Semester</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div id ="semester7">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Semester 7</label>
                                                                <div class="col-sm-3">
                                                                    <select name="subject1" class="form-control">
                                                                        <option value ='' disabled selected>Select Preferred 1</option>
                                                                        <option value="15I701">Information security</option>
                                                                        <option value="15I702">Data mining</option>
                                                                        <option value="15I703">Internet of things</option>
                                                                        <option value="15I003">Soft computing</option>
                                                                        <option value="15I005">Software process management</option>
                                                                        <option value="15I009">Cloud computing</option>
                                                                        <option value="15I010">TCP/IP and network management</option>
                                                                        <option value="15I011">Digital image processing</option>
                                                                        <option value="15I012">Unix internals</option>
                                                                        <option value="15I018">Client server computing</option>
                                                                        <option value="15I019">Embedded systems</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <select name="subject2" class="form-control">
                                                                    <option value ='' disabled selected>Select Preferred 2</option>
                                                                    <option value="15I701">Information security</option>
                                                                        <option value="15I702">Data mining</option>
                                                                        <option value="15I703">Internet of things</option>
                                                                        <option value="15I003">Soft computing</option>
                                                                        <option value="15I005">Software process management</option>
                                                                        <option value="15I009">Cloud computing</option>
                                                                        <option value="15I010">TCP/IP and network management</option>
                                                                        <option value="15I011">Digital image processing</option>
                                                                        <option value="15I012">Unix internals</option>
                                                                        <option value="15I018">Client server computing</option>
                                                                        <option value="15I019">Embedded systems</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <select name="subject3" class="form-control">
                                                                        <option value ='' disabled selected>Select Preferred 3</option>
                                                                        <option value="15I701">Information security</option>
                                                                        <option value="15I702">Data mining</option>
                                                                        <option value="15I703">Internet of things</option>
                                                                        <option value="15I003">Soft computing</option>
                                                                        <option value="15I005">Software process management</option>
                                                                        <option value="15I009">Cloud computing</option>
                                                                        <option value="15I010">TCP/IP and network management</option>
                                                                        <option value="15I011">Digital image processing</option>
                                                                        <option value="15I012">Unix internals</option>
                                                                        <option value="15I018">Client server computing</option>
                                                                        <option value="15I019">Embedded systems</option>
                                                                    </select>
                                                                </div>
                                                                <input type="hidden" name="lab">
                                                                </div>

                                                            </div>

                                                            <div id ="semester8">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Semester 8</label>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject1" class="form-control">
                                                                            <option value ='' disabled selected>Select Preferred 1</option>
                                                                            <option value="15I701">Information retrieval</option>
                                                                            <option value="15I702">Web services and service oriented architecture</option>
                                                                            <option value="15I703">Internet of things</option>
                                                                            <option value="15I003">Multicore computing</option>
                                                                            <option value="15I005">Network and internet security</option>                                                                  
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject2" class="form-control">
                                                                        <option value ='' disabled selected>Select Preferred 2</option>
                                                                        <option value="15I701">Information retrieval</option>
                                                                            <option value="15I702">Web services and service oriented architecture</option>
                                                                            <option value="15I703">Internet of things</option>
                                                                            <option value="15I003">Multicore computing</option>
                                                                            <option value="15I005">Network and internet security</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <select name="subject3" class="form-control">
                                                                        <option value="15I701">Information retrieval</option>
                                                                            <option value="15I702">Web services and service oriented architecture</option>
                                                                            <option value="15I703">Internet of things</option>
                                                                            <option value="15I003">Multicore computing</option>
                                                                            <option value="15I005">Network and internet security</option>
                                                                        </select>
                                                                    </div>
                                                                    <input type="hidden" name="lab">

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


    $("#secondyear").hide();
    $("#thirdyear").hide();
    $("#fourthyear").hide();

    $("#selectyear").change(function() {
         var year = $('option:selected', this).val();

        //  alert(year);

         if (year == '2'){
             $("#secondyear").show();
         } else {
            $("#secondyear").hide();
         }
         if (year == '3'){
             $("#thirdyear").show();
         } else {
            $("#thirdyear").hide();
         }
         if (year == '4'){
             $("#fourthyear").show();
         } else {
            $("#fourthyear").hide();
         }
    });



    $("#semester3").hide();
    $("#semester4").hide();

    $("#secondyearsubject").change(function() {
         var year2 = $('option:selected', this).val();
         if (year2 == '3'){
             $("#semester3").show();
         } else {
            $("#semester3").hide();
         }
         if (year2 == '4'){
             $("#semester4").show();
         } else {
            $("#semester4").hide();
         }
    });


    $("#semester5").hide();
    $("#semester6").hide();

    $("#thirdyearsubject").change(function() {
         var year3 = $('option:selected', this).val();
         if (year3 == '5'){
             $("#semester5").show();
         } else {
            $("#semester5").hide();
         }
         if (year3 == '6'){
             $("#semester6").show();
         } else {
            $("#semester6").hide();
         }
    });

    $("#semester7").hide();
    $("#semester8").hide();

    $("#fourthyearsubject").change(function() {
         var year4 = $('option:selected', this).val();
         if (year4 == '7'){
             $("#semester7").show();
         } else {
            $("#semester7").hide();
         }
         if (year4 == '8'){
             $("#semester8").show();
         } else {
            $("#semester8").hide();
         }
    });



});

</script>
</body>

</html>
