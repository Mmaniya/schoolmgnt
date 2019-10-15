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
                                                    <h4>Update My Profile</h4>
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
                                                    <h5>Add New Staff</h5>
                                                    <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->


                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>

                                                </div>
                                                <div class="card-block">
                                                    <h4 class="sub-title">Basic Details</h4>
                                                    <form action="function/updateprofile.php" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="staffid" value="<?php echo $staffid; ?>">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="staffname" placeholder="Type your Name" value="<?php 
                                                                echo $name; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Mobile</label>
                                                            <div class="col-sm-10">
                                                                <input type="tel" class="form-control" name="mobile" placeholder="Type your Mobile" value="<?php echo $mobile; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" name="staffemail" placeholder="Enter Your Email" value="<?php echo $email; ?>">
                                                            </div>
                                                        </div>
                                                 
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Upload Profile</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control" name="profile">
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Select Box</label>
                                                            <div class="col-sm-10">
                                                                <select name="select" class="form-control">
                                                                    <option value="opt1">Select One Value Only</option>
                                                                    <option value="opt2">Type 2</option>
                                                                    <option value="opt3">Type 3</option>
                                                                    <option value="opt4">Type 4</option>
                                                                    <option value="opt5">Type 5</option>
                                                                    <option value="opt6">Type 6</option>
                                                                    <option value="opt7">Type 7</option>
                                                                    <option value="opt8">Type 8</option>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                                        
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Year of Experience
                                                                </label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="experience" placeholder="Enter Year of Experience" value="<?php echo $experience; ?>" >
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Address</label>
                                                            <div class="col-sm-10">
                                                                <textarea rows="5" cols="5" class="form-control" name="address" placeholder="Default textarea"><?php echo $address; ?></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Password
                                                                </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="password" placeholder="Enter Year of Password" value="<?php echo $password; ?>" >
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="offset-lg-3 col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <input type="submit" class="btn btn-grd-primary btn-block" value="Update Profile">
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
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
