<?php 

session_start();
include_once('../../db/dpconfig.php');
$staffid = $_REQUEST['staffid'];
$deptname = $_REQUEST['deptname'];
$experience = $_REQUEST['experience'];
$selectyear = $_REQUEST['selectyear'];
$selectsemeter = $_REQUEST['selectsemeter'];
$subject1 = $_REQUEST['subject1'];
$subject2 = $_REQUEST['subject2'];
$subject3 = $_REQUEST['subject3'];
$lab = $_REQUEST['lab'];
$status = 1;

$sql = "INSERT INTO `ugpreference`(`dept`, `year`, `semester`, `staffid`, `experience`, `subject1`, `subject2`, `subject3`, `lab`, `status`) VALUES ('$deptname','$selectyear','$selectsemeter','$staffid','$experience','$subject1','$subject2','$subject3','$lab','$status')";
$result = $conn->query($sql);
  
if($result){
    $_SESSION['message']['success'] = "<center><h6 style='color:green'>Add New Class.!</h6><center>";
        header("Location: ../view_ugpreference.php?myid=$staffid");
}
?>