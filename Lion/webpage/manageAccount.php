<?php
echo ("manage Account manageaccount.php called")
# pull data
# display
?>

<!DOCTYPE html>
<html lang="en">
<!-- metadata (data about the page) in-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- change the tab text-->
    <title>The Local Farm Company - Manage Account</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<!-- ********************************* -->

<body class="bg-light">
<!-- anything we want to display goes in the body -->

<main class="container mt-5">

    <label class="customerName mb-3">CUSTOMER NAME is MANAGING ACCOUNT</label></br>

    <a href="order.php" class="btn btn-primary mb-3">Return To Orders</a>

    <div class="dropdown mb-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            MENU
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="order.php">Return to Order</a></li>
        </ul>
    </div>

    <form id="form1" action="join.php" method="get">
        <fieldset class="border p-3">
            <legend>Account Information</legend>
            <div class="mb-3">
                <label for="email" class="form-label">Email address:</label>
                <input type="email" id="email1" name="email1" class="form-control" placeholder="Enter email">
                <button type="button" id="changeEmail_btn" class="btn btn-info mt-2">Change Email</button>
            </div>

            <div class="mb-3">
                <label for="password1" class="form-label">Password:</label>
                <input type="password" id="password1" name="password1" class="form-control" placeholder="*****">
                <button type="button" id="changePassword_btn" class="btn btn-info mt-2">Change Password</button>
            </div>

            <div class="mb-3">
                <label for="yourName" class="form-label">Name:</label>
                <input type="text" id="yourName" name="yourName" class="form-control" placeholder="Enter name">
                <button type="button" id="changeName_btn" class="btn btn-info mt-2">Change Name</button>
            </div>

            <div class="mb-3">
                <label for="yourAddress" class="form-label">Address:</label>
                <input type="text" id="yourAddress" name="yourAddress" class="form-control" placeholder="Enter Address">
                <button type="button" id="changeAddress_btn" class="btn btn-info mt-2">Change Address</button>
            </div>

            <div class="mb-3">
                <label for="emailFrequency" class="form-label">Email News Letter Frequency</label>
                <select class="form-select" id="emailFrequency">
                    
            <option value="0">Never</option>
            <option value="1">Weekly</option>
            <option value="2">Bi-Weekly</option>
            <option value="3">Monthly</option>
            <option value="4">Quarterly</option>
                </select>
            </div>
            

            <h4>Loyalty Membership Class</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="membership" id="noMembership" value="none">
                <label class="form-check-label" for="noMembership">No Membership</label>
            </div>

            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="membership" id="basicMembership" value="basic">
                <label class="form-check-label" for="basicMembership">Basic Membership</label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="radio" name="membership" id="silverMembership" value="silver">
                <label class="form-check-label" for="silverMembership">Silver Membership</label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="radio" name="membership" id="goldMembership" value="gold" checked>
                <label class="form-check-label" for="goldMembership">Gold Membership</label>
            </div>
        </fieldset>
    </form>
</main>



</body>
</html>
