<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('location:signin.php');
    exit;
}
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="./index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img class="mb-1" src="images/applelogo3.png" alt="" height="57">
          <span class = "ms-1 fs-2">Apple</span>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        </ul>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Activity</button>
          <button type="button" class="btn btn-warning">report</button>
        </div>
        
        <div class="dropdown text-end ms-2">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <?php
          $sql = "SELECT image 
                  FROM student 
                  WHERE studentID = 
                  '{$_SESSION['user']['studentID']}'";
                  $result = $conn -> query($sql);
                  $image = $result -> fetch_assoc()['image'];
            if($image) {
              echo "<img src = 'images/profile/$image' 
                    class = 'rounded-circle' height = '42' >";
            } else {
              echo '<span class="material-symbols-outlined"
            style = "font-size: 50px; color:white">
            account_circle
          </span>';
            }
            ?>
          </a>
          <ul class="dropdown-menu text-small">
            <li><div class="dropdown-item text-primary" ><?php echo $_SESSION['user']['studentName'];?></div></li>
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="signout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>