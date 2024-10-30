<?php 
session_start();
if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_email'])) {

include '../php/connection.php';
include 'fileupload.php';
if (
    isset($_POST['propertyType']) &&
    isset( $_POST['propertyName']) &&
    isset($_POST['propertyLocation']) &&
    isset($_POST['propertyPrice']) &&
    isset($_POST['propertyDescription']))
{
    $propertyId = $_POST['propertyId'];
    $propertyType = $_POST['propertyType'];
    $propertyName = $_POST['propertyName'];
    $propertyLocation = $_POST['propertyLocation'];
    $propertyPrice = $_POST['propertyPrice'];
    $propertyDescription = $_POST['propertyDescription'];

    $allowedImageExs = array("jpg", "jpeg", "png");
    $path = "properties";
    
        $sql = "INSERT INTO properties(
            property_id,
            property_name,
            property_type,
            property_location,
            property_price,
            description
            ) VALUES(?,?,?,?,?,?);";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "isssss",$propertyId, $propertyName, $propertyType, $propertyLocation, $propertyPrice, $propertyDescription);
            $res = mysqli_stmt_execute($stmt);
            if ($res) {
                $sm = "The property succcessfully created!";
                header("Location: ./addform.php?success=$sm");
            } else {
                $em = "Unknown Error Ocurred!";
                header("Location: ./addform.php?error=$em");
                exit();
            }
            
    }
}



?>













