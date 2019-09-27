<?php
session_start();
include_once('../../db/dpconfig.php');
$useremail = $_REQUEST['useremail'];
$password = $_REQUEST['password'];


$sql = "SELECT * FROM `admin` WHERE username='$useremail' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
          $uname = $row["username"];
          $upassword = $row["password"];
       
            if( $uname == $useremail && $upassword == $password){
                header('Location: ../dashbord.php');
            }else{
                $_SESSION['message']['success'] = "<center><span class='col-pink'>Invalid Username Password..!</span><center>";
                header('Location: ../index.php');
            }
        }
    }else{
        $_SESSION['message']['success'] = "<center><span class='col-pink'>Access Denied..!</span><center>";
        header('Location: ../adminlogin.php');
    }
