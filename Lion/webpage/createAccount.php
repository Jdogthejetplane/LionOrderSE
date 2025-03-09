<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Sign up </h1>

      

            <div class="mb-3">
                <label for="username" class="form-label">First Name:</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>

            <div class="mb-3">
                <label for="last" class="form-label">Last Name:</label>
                <input type="text" name="last" class="form-control" id="last" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Email:</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>


            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="username" name="username" class="form-control" id="username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Create Account</button>
        </form>

        <div class="text-center mt-3">
            <a href="login.php">Already have an account? Login here.</a>
        </div>
    </div>

  

</body>
</html>
