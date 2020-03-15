<?php
session_start();
include_once('../../db/dpconfig.php');
$dept = $_REQUEST['dept'];
$staffname = $_REQUEST['staffname'];
$imageURL = $_REQUEST['imageURL'];
$experience = $_REQUEST['experience'];
$year1 = $_REQUEST['year1'];
$subject = $_REQUEST['subject'];
$labone = $_REQUEST['labone'];
$semester = $_REQUEST['semester'];
$status = 1;


 $sqlss = "SELECT  * FROM `ugtimetable` WHERE `subject`='$subject'";
$result = $conn->query($sqlss);										
if ($result->num_rows > 0) {

    header("Location:../alreadyselect.php");
   
   }else{

    $sql = "INSERT INTO `ugtimetable`(`staffid`, `image`, `subject`, `lab`, `dept`, `year`, `sem`, `status`) VALUES ('$staffname','$imageURL','$subject','$labone','$dept','$year1','$semester','$status')";
    $result = $conn->query($sql);
    
    $sql1 = "UPDATE `ugpreference` SET `status`='2' WHERE `staffid`='$staffname'";
    $result1 = $conn->query($sql1);
    header("Location:../staffselected.php");

   }

 
?>