<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customize Your Salad</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body class="bg-light">


    <!--  Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <img src="farmlogo.png" alt="Logo" class="rounded-circle" width="50">&nbsp;&nbsp;
            <a class="navbar-brand" style= " font-size: 23px;"  href="#">The Local Farm Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="menu me-3"><a class="nav-link" href="pastorders.php" style="color: white; font-size: 18px;">Past Orders</a></li>
                    <li class="menu me-3"><a class="nav-link" href="manageaccount.php" style="color: white; font-size: 18px;">Manage Account</a></li>
                    <li class="menu me-3 "><a class="nav-link" href="login.php" style="color: white; font-size: 18px;">Log Out</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">Build Your Custom Salad</h1>

        <form action="submit_order.php" method="POST">


            <div class="mb-4">

                <label for="greens" class="form-label">Please Choose Your Greens!</label>

                <select id="greens" name="greens" class="form-select" required>
                    <option value= "lettuce">Lettuce</option>
                    <option value ="spinach">Spinach</option>
                    <option value = "kale">Kale</option>
                    <option value = "cabbage">Cabbage</option>
                    <option value = "arugula">Arugula</option>
                </select>
            </div>

            
            <div class="mb-3">
                <label for="vegetables" class="form-label">Please Select Your Vegetables!</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="carrots" name="veggies" value="carrots">
                    <label class="form-check-label" for="carrots">Carrots</label>
                </div>


                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="cucumbers" name="veggies" value="cucumbers">
                    <label class="form-check-label" for="cucumbers">Cucumbers</label>
                </div>


                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="tomatoes" name="veggie" value="tomatoes">
                    <label class="form-check-label" for="tomatoes">Tomatoes</label>
                </div>


                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="onions" name="veggies" value="onions">
                  <label class="form-check-label" for="onions">Onions</label>
              </div>


              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="onions" name="veggies" value="avocado">
                <label class="form-check-label" for="avocado">Avocado</label>
            </div>


          


                
            </div>

            <!-- Quantity selection -->
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity (number of salads)</label>
                <input type="number" id="quantity" name="quantity" class="form-control" min="1" value="1" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Place Your Order</button>
        </form>
    </div>

    <!-- Order Summary Table -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Order Summary</h2>
        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                <td>Custom Salad</td>
                <td>$5.00</td>
                 <td>2</td>
                <td>$10.00</td>

                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Order Total</th>
                    <th>$10.00</th>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>
