<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../php/connection.php";
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $con->prepare("SELECT customer_id, email, password_hash FROM customers WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows >= 1) {
        $user = $result->fetch_assoc();
        $userId = $user['customer_id'];
        $userEmail = $user['email'];
        $userPassword = $user['password_hash'];
       

        if (password_verify($password, $userPassword)) {
            $_SESSION['customerId'] = $userId;
            $_SESSION['userEmail'] = $userEmail;
            header("Location: ../index.php");
            exit();
        } 
         else {
            $em = "Incorrect usname or password";
            redirectBackWithError($em);
        }
    } else {
        $em = "Incorrect username or password";
        redirectBackWithError($em);
    }
} else {
    redirectBackWithError($em);
    exit;
}

function redirectBack() {
    if (isset($_SESSION['previous_page'])) {
        $previousPage = $_SESSION['previous_page'];
        unset($_SESSION['previous_page']); // Clear the previous page after redirection
        header("Location: $previousPage");
        exit();
    }
}

function redirectBackWithError($error) {
    $_SESSION['previous_page'] = $_SERVER['HTTP_REFERER']; // Store the previous page URL in the session
    header("Location: {$_SERVER['HTTP_REFERER']}?error=$error");
    exit();
}
?>
