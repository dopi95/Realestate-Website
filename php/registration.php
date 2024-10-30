<?php
include "connection.php";
$registrationError = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
    $adminUsername = $_POST['username'];
    $adminPassword = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $adminEmail = $_POST['email'];


    $sql = "INSERT INTO admin (admin_name, admin_email , password_hash) VALUES
    ('$adminUsername', '$adminEmail', '$adminPassword')";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        die('Signup failed: ' . mysqli_error($con));
    }

    echo 'Admin signup successful!';
}

// Close the connection
mysqli_close($con);
echo "not";
?>
