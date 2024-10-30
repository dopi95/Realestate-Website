<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/st.css">
</head>
<body>
<div class="form-box signup" id="register">
        <div>
            <h2>Create Account</h2>
            <p style="text-align: center">To become a part of our community, please sign up using your personal information.</p>
        </div>
        <div class="form-content">
            <!-- PHP for user sign up -->
            <h2>USER SIGNUP</h2>
            <form method="post" action="../middleware/usersignup.php">
                <div class="input-field">
                    <input type="text" name="sign-name" required>
                    <label>Name</label>
                </div>
                <div class="input-field">
                    <input type="text" name="sign-email" required>
                    <label>Enter your email</label>
                </div>
                <div class="input-field">
                    <input type="phone" name="phone" required>
                    <label>Phone</label>
                </div>
                <div class="input-field">
                    <input type="password" name="sign-pass" id="password" required>
                    <label>Create password</label>
                </div>
                <div class="input-field">
                    <input type="password" name="con-sign-pass" id="confirm-password" required>
                    <label>Confirm password</label>
                </div>
                <div class="policy-text">
                    <input type="checkbox" id="policy">
                    <label for="policy">
                        I agree the 
                        <a href="#">Terms & Conditions</a>
                    </label>
                </div>
                <button type="submit" name="chef-signup">Sign Up</button>
            </form>
            <div class="bottom-link">
                Already have an account?
                <a href="javascript:history.back()" id="login-link">Login</a>
            </div>
        </div>
    </div>
    <script src="JS.script.js"></script>
</body>
</html>
