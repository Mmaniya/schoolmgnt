<?php 

session_start();
include_once('../../db/dpconfig.php');
$schoolid = $_REQUEST['schoolid'];
$myid = $_REQUEST['myid'];
$status = 1;




$sql = "SELECT * FROM `schoolapplication` WHERE `stu_id`='$myid' AND `school_id`='$schoolid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
            $_SESSION['message']['success'] = "<center><span class='col-pink'>All Ready Applied..!</span><center>";
            header("Location: ../stuapply.php?myid=$myid");
        
}else{

    $sql = "INSERT INTO `schoolapplication`(`stu_id`, `school_id`, `status`) VALUES ('$myid','$schoolid','$status')";
    $result = $conn->query($sql);
      
    if($result){
        $_SESSION['message']['success'] = "<center><h6 style='color:green'>School Applyied successfully.!</h6><center>";
            header("Location: ../stuapply.php?myid=$myid");
    }

}


