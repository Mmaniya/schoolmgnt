<?php 

session_start();
include_once('../../db/dpconfig.php');
$staffname = $_REQUEST['staffname'];
$mobile = $_REQUEST['mobile'];
$staffemail = $_REQUEST['staffemail'];
$experience = $_REQUEST['experience'];
$address = $_REQUEST['address'];
// $password = $_REQUEST['password'];
$staffid = $_REQUEST['staffid'];
$status = 1;



 $sql = "UPDATE `staff` SET `name`='$staffname',`email`='$staffemail',`mobile`='$mobile',`address`='$address',`experience`='$experience' WHERE `id`='$staffid'";
 $result = $conn->query($sql);

    if($result){
        $_SESSION['message']['success'] = "<center><h6 style='color:green'>Staff Account Upadated..!</h6><center>";
            header('Location: ../viewstaff.php');
    }

?>