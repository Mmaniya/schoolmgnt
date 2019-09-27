<?php
session_start();
include_once('../../db/dpconfig.php');
$useremail = $_REQUEST['useremail'];
$password = $_REQUEST['password'];


$sql = "SELECT * FROM `staff` WHERE email='$useremail' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
         $uname = $row["email"];
         $upassword = $row["password"];
         $status = $row["status"];
         if($status == '1'){
            if( $uname == $useremail && $upassword == $password){
                header("Location: ../staffhome.php?myid=$id");
            }else{
                $_SESSION['message']['success'] = "<center><span class='col-pink'>Invalid Username Password..!</span><center>";
                header('Location: ../index.php');
            }
         }else{
            $_SESSION['message']['success'] = "<center><span class='col-pink'>Account Not Activated..!</span><center>";
            header('Location: ../index.php');
         }
    }
}
