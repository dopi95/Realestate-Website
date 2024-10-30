
<?php
session_start();
if (
    isset($_SESSION['admin_id']) &&
    isset($_SESSION['admin_email'])
) {
    include "../php/connection.php";
    if (isset($_GET['propertyId'])) {
        $id = $_GET['propertyId'];

        if (empty($id)) {
            $em = "Error Occurred!";
            header("Location: ./properties.php?error=$em");
            exit();
        }

        $sql1 = "SELECT * FROM properties WHERE property_id=?";
        $stmt1 = mysqli_prepare($con, $sql1);
        mysqli_stmt_bind_param($stmt1, 'i', $id);
        mysqli_stmt_execute($stmt1);

        $result = mysqli_stmt_get_result($stmt1);

        if (mysqli_num_rows($result) > 0) {
            $theProperty = mysqli_fetch_assoc($result);

            mysqli_free_result($result);

            $sql2 = "DELETE FROM properties WHERE property_id = ?";
            $stmt2 = mysqli_prepare($con, $sql2);
            mysqli_stmt_bind_param($stmt2, "s", $id);
            $res = mysqli_stmt_execute($stmt2);

            if ($res) {
                $sm = "Successfully removed!";
                header("Location: ./properties.php?success=$sm");
                exit;
            } else {
                $em = "Error Occurred while deleting the property.";
                header("Location: ../properties.php?error=$em");
                exit;
            }
        } else {
            $em = "property not found!";
            header("Location: ./properties.php?error=$em");
            exit;
        }
    } else {
        header("Location: ./properties.php");
        exit;
    }
} else {
    header('location: ../admin-login.php');
    exit;
}

?>