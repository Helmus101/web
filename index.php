<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./home.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
</head>

<body>
<nav class ="navbar navbar-expand-xl navbar-dark bg-transparent", class="navigation", style="color:#fff; ">
            <a class ="navbar-brand" href ="#"> Website Name </a>
            <button class ="navbar-toggler" type ="button" data-toggle ="collapse" data-target ="#colNav">
            <span class ="navbar-toggler-icon"></span>
            </button>
            <div class ="collapse navbar-collapse" id ="colNav">
            <ul class ="navbar-nav">
            <li class ="nav-item">
            <a class ="nav-link" href="index.php" style="color:
            #fff;"> Home </a>
            </li>
            <li class ="nav-item">
            <a class ="nav-link" href ="profile.php" style="color:
            #fff;"> Profile</a>
            </li>
            <li class ="nav-item">
            
            <a href="./logout.php"  class="nav-link" style='color:
            #fff'>Log Out</a>
            </li>
            
            </ul>
            </div>
            </nav>
  <div class="container">
    <div class="alert alert-success my-5">
      Welcome ! You are now signed in to your account.
    </div>
    <!-- User profile -->
    <div class="row justify-content-center">
      <div class="col-lg-5 text-center">
        
        <h4 class="my-4">Hello, <?= htmlspecialchars($_SESSION["username"]); ?></h4>
        
      </div>
    </div>
  </div>
</body>

</html>