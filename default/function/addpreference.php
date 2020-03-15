<?php 

session_start();
include_once('../../db/dpconfig.php');
$staffid = $_REQUEST['staffid'];
$stuname = $_REQUEST['stuname'];
$staffname = $_REQUEST['staffname'];
$experience = $_REQUEST['experience'];
$selectyear = $_REQUEST['selectyear'];
$selectedu = $_REQUEST['selectedu'];
$popularity = $_REQUEST['popularity'];

$status = 1;

 $sql = "INSERT INTO `ugpreference`(`stuname`, `staffname`, `staffid`, `experience`, `selectyear`, `selectedu`, `popularity`, `status`) VALUES ('$stuname','$staffname','$staffid','$experience','$selectyear ','$selectedu','$popularity','$status')";
$result = $conn->query($sql);
  
if($result){
    $_SESSION['message']['success'] = "<center><h6 style='color:green'>Add New Class.!</h6><center>";
        header("Location: ../view_ugpreference.php?myid=$staffid");
}
?>