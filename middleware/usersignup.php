<?php

include "../php/connection.php";
$registrationError = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Username = $_POST['sign-name'];
    $Email = $_POST['sign-email'];
    $phone = $_POST['phone'];
    $Password = $_POST['sign-pass']; 
    $confirmPassword = $_POST['con-sign-pass'];

    $phonepattern = "/^\+?\d{1,4}-\d{3}-\d{3}-\d{3,4}$/";

    if(preg_match($phonepattern, $phone)){
        echo "Valid Telephone Number";
    } 
    else {
        echo "Invalid Telephone Number";
    }
  $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    if (preg_match($emailPattern, $Email)) {
        echo "Valid Email";
    } 
    else {
        echo "Invalid Email";
    }

    if ($Password === $confirmPassword) {
        $Password = password_hash($_POST['sign-pass'], PASSWORD_DEFAULT); // Hash the password
        // Use prepared statements to prevent SQL injection
        $sql = "INSERT INTO customers (full_name, email, password_hash,phone_Number) VALUES (?, ?, ?,?)";
        $stmt = mysqli_prepare($con, $sql);
        
        mysqli_stmt_bind_param($stmt, "ssss", $Username, $Email, $Password,$phone);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if (!$result) {
            die('Signup failed: ' . mysqli_error($con));
        }

        // User signup successful, redirect to the previous page
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        $registrationError = "Passwords do not match.";
    }
}

// Close the connection
mysqli_close($con);
echo $registrationError;
?>
