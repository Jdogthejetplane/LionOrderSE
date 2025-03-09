<?php

  // Simple user data for testing
  $users = [
      "user1@farm.com" => "password",
      "admin@localfarm.com" => "passadmin"
  ];
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = ($_POST['email'] ?? '');
      $password = ($_POST['pass'] ?? '');
  

      if (isset($users[$email]) && $users[$email] === $password) {
          header("Location: order.php");
           exit();

      } else {
          echo '<p style="color: red;">Invalid email or password. Please try again.</p>';
      }
  }

  ?>
  




<!-- HTML CODE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Local Farming Company</title>

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS Connection -->
    <link rel="stylesheet" href="login.css"> 
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <h1 class="title">The Local Farming Company</h1> <!-- Title -->
        
        <form action="login.php" method="post" class="p-4 border rounded bgwhite shadow-sm" style="width: 100%; max-width: 420px;">
            <div class="text-center mb-3">
                <img src="farmlogo.png" alt="Logo" class="rounded-circle" width="150">
            </div>

            <div
                class ="topleftlogo">
                <img src="farmlogo.png">

            </div>
            

            <div class="email">
                <label for="email" class="emaillabel"><b>Email</b></label>
                <input type="email" class="form-control" placeholder="Enter your Email" name="email" required>
            </div>
      

            <div class="password">
                <label for="pass" class="passlabel"><b>Password</b></label>
                <input type="password" class="form-control" placeholder="Enter your Password" name="pass" required>
            </div>
            

            <div class= login>
            <button type="submit" class="btn btn-primary w-100 mb-2" style="background-color: green; color: white;">Login</button>

            </div>
      

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" checked name="remember" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
      
            
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <a href="createaccount.php" class="text-decoration-none" >Create account</a>
                <a href="forgotpassword.php" class="text-decoration-none">Forgot password?</a>
            </div>
        </form>
    </div>
</body>
</html>
