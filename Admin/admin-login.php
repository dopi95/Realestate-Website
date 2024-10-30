<?php
session_start();
if (
  !isset($_SESSION['user_id']) &&
  !isset($_SESSION['username'])
) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Admin login</title>
</head>
<body>
       <div class="cont-1">
            <h2>Admin Login page</h2> 
            <div class="Admin">
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert">
            <p>
              <?= htmlspecialchars($_GET['error']); ?>
            </p>

          </div>

        <?php } ?>
            <div class="cont-2">
                <form action="../middleware/auth.php" method="post">
                    <label for="username" class="form">Email</label> <br>
                    <input type="text" name="email" placeholder="Enter your Email" >
                      <br>
                    <label for="password" class="form">Password</label>
                     <br>
                    <input type="password" name="password" placeholder="Enter your password"> 
                     <p><a href="#">Forget password ?</a></p>
                    <br>
                    <div class="btnclass">
                        <button type="submit" class="btn">login</button>
          </div>
                </form>
            </div>  
        </div>
        <?php
}
        ?>
</body>
</html>
