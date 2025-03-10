<?php
# Pull data
# Display
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Local Farm Company - Manage Account</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <main class="container mt-5">
        <h1 class="text-center mb-4">Manage Your Account</h1>

        <p class="customerName text-muted mb-4">CUSTOMER NAME is managing their account.</p>

        <div class="d-flex justify-content-between mb-4">
            <a href="order.php" class="btn btn-primary">Return to Orders</a>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="order.php">Return to Orders</a></li>
                </ul>
            </div>
        </div>

        <form id="form1" action="join.php" method="get" class="p-4 border rounded bg-white">
            <fieldset>
                <legend class="mb-3">Account Information</legend>

                <div class="mb-3">
                    <label for="email1" class="form-label">Email address:</label>
                    <input type="email" id="email1" name="email1" class="form-control" placeholder="Enter email">
                    <button type="button" id="changeEmail_btn" class="btn btn-info mt-2">Change Email</button>
                </div>

                <div class="mb-3">
                    <label for="password1" class="form-label">Password:</label>
                    <input type="password" id="password1" name="password1" class="form-control" placeholder="Enter password">
                    <button type="button" id="changePassword_btn" class="btn btn-info mt-2">Change Password</button>
                </div>

                <div class="mb-3">
                    <label for="yourName" class="form-label">Name:</label>
                    <input type="text" id="yourName" name="yourName" class="form-control" placeholder="Enter name">
                    <button type="button" id="changeName_btn" class="btn btn-info mt-2">Change Name</button>
                </div>

                <div class="mb-3">
                    <label for="yourAddress" class="form-label">Address:</label>
                    <input type="text" id="yourAddress" name="yourAddress" class="form-control" placeholder="Enter address">
                    <button type="button" id="changeAddress_btn" class="btn btn-info mt-2">Change Address</button>
                </div>

                <div class="mb-3">
                    <label for="emailFrequency" class="form-label">Email Newsletter Frequency:</label>
                    <select class="form-select" id="emailFrequency" name="emailFrequency">
                        <option value="0">Never</option>
                        <option value="1">Weekly</option>
                        <option value="2">Bi-Weekly</option>
                        <option value="3">Monthly</option>
                        <option value="4">Quarterly</option>
                    </select>
                </div>

            </fieldset>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
