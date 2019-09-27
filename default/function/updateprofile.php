<?php 

session_start();
include_once('../../db/dpconfig.php');
$staffname = $_REQUEST['staffname'];
$mobile = $_REQUEST['mobile'];
$staffemail = $_REQUEST['staffemail'];
$experience = $_REQUEST['experience'];
$address = $_REQUEST['address'];
$password = $_REQUEST['password'];
$staffid = $_REQUEST['staffid'];
$status = 1;


$targetDir = "uploads/";
$fileName = basename($_FILES["profile"]["name"]);
$targetFilePath = $targetDir . $fileName;
 $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(!empty($_FILES["profile"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database

                            $sql = "UPDATE `staff` SET `name`='$staffname',`email`='$staffemail',`mobile`='$mobile',`profile`='$fileName',`address`='$address',`experience`='$experience',`password`='$password' WHERE `id`='$staffid'";
                            $result = $conn->query($sql);

                        if($result){
                            $_SESSION['message']['success'] = "<center><h6 style='color:green'>Update successfully..!</h6><center>";
                                header("Location: ../profile.php?myid=$staffid");
                            // $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                        }else{
                            $statusMsg = "File upload failed, please try again.";
                        } 
                    }else{
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                }
            }else{
                $statusMsg = 'Please select a file to upload.';
            }


?>