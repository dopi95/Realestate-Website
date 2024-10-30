<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../php/connection.php";
    

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $con->prepare("SELECT admin_id, admin_email, password_hash FROM admin WHERE admin_email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows >= 1) {
        $user = $result->fetch_assoc();
        $userId = $user['admin_id'];
        $userEmail = $user['admin_email'];
        $userPassword = $user['password_hash'];

        if (password_verify($password, $userPassword)) {
            $_SESSION['admin_id'] = $userId;
            $_SESSION['admin_email'] = $userEmail;
            header("Location: ../Admin/Dashboard.php");
            exit();
        } else {
            $em = "Incorrect username or password";
        }
    } else {
        $em = "Incorrect username or password";
    }

    header("Location: ../Admin/admin-Login.php?error=$em");
} else {
    header("Location: ../Admin/admin-Login.php");
    exit;
}
?>
