<?php
session_start();
include_once('../../db/dpconfig.php');
$staffid = $_REQUEST['id'];

$sql = "DELETE FROM `staff` WHERE `id`='$staffid'";
$result = $conn->query($sql);

   if($result){
       $_SESSION['message']['success'] = "<center><h6 style='color:green'>Staff Account Removed..!</h6><center>";
        header('Location: ../viewstaff.php');
   }
