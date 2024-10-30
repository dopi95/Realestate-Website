<?php
session_start();
if (!isset($_SESSION['admin_id']) || !isset($_SESSION['admin_email'])) {
    header("Location: admin-login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
    <title>Dashboard</title
</head>
<body>
    <aside class="aside">
        <h3 style="text-align: center; padding: 2.5rem;">Mr. Admin</h3>
        <ul class="sidebar">
            <li><i class="fa-solid fa-table-columns"></i> <span><a href="Dasboard.php">Dashboard</a></span></li>
            <li><i class="fa-solid fa-house"></i><span> <a href="properties.php">Properties</a></span></li>
            <li><i class="fa-solid fa-hotel"></i><span><a href="Rent.html">Rent/Buy</a></span></li>
            <li><i class="fa-solid fa-users"></i><span><a href="User.html">User</a></span></li>
            <li><i class="fa-regular fa-user"></i><span><a href="Agent.html">Agent</a></span></li>
            <li><i class="fa-solid fa-right-from-bracket"></i><span><a href="../middleware/logout.php">Logout
                    </a></span><li>
                    
                
        </ul>
    </aside>  
    <div id="content">
        <div class="dashboard-container">
          <h1>Admin Dashboard</h1>
  
          <!-- Display Key Metrics -->
          <div class="metrics-container">
            <div class="metric">
              <h2>Total Properties</h2>
              <p>100</p>
            </div>
            <div class="metric">
              <h2>Active Listings</h2>
              <p>75</p>
            </div>
            <div class="metric">
              <h2>Users / Customer</h2>
              <p>10</p>
            </div>
          </div>
  
          <!-- Quick Access to Tasks -->
          <div class="quick-tasks">
            <button>Manage Properties</button>
            <button>Analytics</button>
            <button>User Management</button>
          </div>
        </div>
</body>
</html>