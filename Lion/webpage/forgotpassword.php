<?php

  // stubbed out basics, GET to reteive data from customer database, or valid email database?
  
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $email = ($_POST['email'] ?? '');

// change following as needed

      if (isset($users[$email]) && $users[$email]) {
         echo '<p style="color: red;">REPLACE WITHPOPUP FOR STATUS????.</p>';
          header("Location: login.php");
           exit();

      } 
// if an email not found notice is sent, hackers can whittle down to valid emails
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

        <h1 class="title"><br>The Local Farming Company</h1> <!-- Title -->
        
        <form action="forgotpassword.php" method="get" class="p-4 border rounded bgwhite shadow-sm" style="width: 100%; max-width: 420px;">
            <div class="text-center mb-3">
                <img src="farmlogo.png" alt="Logo" class="rounded-circle" width="150">
            </div>

            <div
                class ="topleftlogo">
                <img src="farmlogo.png">

            </div>
            
            <div process>
<strong>Reset your password.</strong> </br>
</br>
            </div>


            <div class="email">
                <label for="email" class="emaillabel"><b>Email</b></label>
                <input type="email" class="form-control" placeholder="Enter your Email" name="email" required>
            </div>
      
            <div class= login>
            <button type="submit" class="btn btn-primary w-100 mb-2" style="background-color: green; color: white;">Send Email</button>

            </div>

</br>
<label class="emailsent">
If the given email is associated with an account, you will receive an email once you hit the "Send Email" button. Check your inbox (or spam folder) after that.
</label>
</br>
</br>
                  
            <div class="d-flex justify-content-between">
                <a href="login.php" class="text-decoration-none" >Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
