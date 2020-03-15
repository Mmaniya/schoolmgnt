<?php
session_start();
include_once('../../db/dpconfig.php');
$staffid = $_REQUEST['id'];

$sql = "UPDATE `staff` SET `status`='1' WHERE `id`='$staffid'";
$result = $conn->query($sql);

   if($result){
       $_SESSION['message']['success'] = "<center><h6 style='color:green'>Staff Account Upadated..!</h6><center>";
           header('Location: ../viewstaff.php');
   }
