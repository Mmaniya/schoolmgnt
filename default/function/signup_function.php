<?php
session_start();
include_once('../../db/dpconfig.php');
$username = $_REQUEST['username'];
$useremail = $_REQUEST['useremail'];
$password = $_REQUEST['password'];



$sql = "SELECT * FROM `staff` WHERE email='$useremail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        $_SESSION['message']['success'] = "<center><span class='col-pink'>Email Id Already Registerd.!</span><center>";
        header('Location: ../invalid_user.php');  
    }
}else{

    $sql = "INSERT INTO `staff`(`name`, `email`, `mobile`, `profile`, `address`, `experience`, `password`, `sub1`, `sub2`, `sub3`, `lab`, `status`) VALUES ('$username','$useremail','','','','','$password','','','','','0')";
    $result = $conn->query($sql);

    if ($result == '1'){
        $_SESSION['message']['success'] = "<center><h6 style='color:green'>Account Activated Soon..!</h6><center>";
        header('Location: ../index.php');
    }

}

