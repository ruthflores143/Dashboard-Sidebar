<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 15px georgia; text-align: center; 
                }
        
    </style>
</head>
<body>
<div class= "container-fluid d-flex justify-content-center p-5">
    <div class= "col-lg-4 position-absolute top-50 start-50 translate-middle p-5 bg-light rounded">
        <h2 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h2>
        <p>
        <a href="reset-password.php" class="btn btn-warning ml-3">Reset Your Password</a>
        <a href="logout.php" class="btn btn-info ml-3">Sign Out of Your Account</a><br> 
        <br></br><a href="https://ruthflores143.github.io/Dashboard-Sidebar/" class="btn btn-danger ml-3">Go to Home Page</a>
        <a href="https://ruthflores143.github.io/Dashboard-Sidebar/" class="btn btn-danger ml-3">Go to Home Page</a>
        </p>
    </div>
</div>
</body>
</html>