<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>
<body>

<h2>Admin Registration</h2>

<form action="registration.php" method="post">
    <label for="username">username:</label>
    <input type="text" id="username" name="username"><br/>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit" name="signup">Register</button>
</form>

<?php
// Display registration error message
if (!empty($registrationError)) {
    echo "<p>$registrationError</p>";
}
?>

</body>
</html>
