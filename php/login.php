<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/st.css">
</head>
<body>
<div class="form-box login" id="log-in">
        <div>
            <h2>Welcome Back</h2>
            <p style="text-align: center;">Please log in using your personal information to stay connected with us.</p>
        </div>
        <div class="form-content">
            <h2>LOGIN</h2>
            <form method="post" action="../middleware/userlogin.php">
                <div class="input-field">
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                
                <a href="#" class="forgot-pass">Forget password?</a>
                <a href="#"><button type="submit" name>Log In</button></a>
            </form>
            <div class="bottom-link">
                Don't have an account?
                <a href="userregistration.php" id="signup-link">SignUp</a>
            </div>
        </div>
    </div>
</body>
</html>