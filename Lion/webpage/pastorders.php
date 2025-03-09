<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Local Farm Company - Past Orders</title>
    <link rel="stylesheet" href="style.css">
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
                    <li class="menu me-3"><a class="nav-link" href="order.php" style="color: white; font-size: 18px;">Order Screen</a></li>
                    <li class="menu me-3"><a class="nav-link" href="manageaccount.php" style="color: white; font-size: 18px;">Manage Account</a></li>
                    <li class="menu me-3 "><a class="nav-link" href="login.php" style="color: white; font-size: 18px;">Log Out</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->

    <div class="container mt-5">
        <header class="text-center mb-4">
                   <h1 class="text-center mb-4">Your Past Orders</h1>
        </header>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>

                    <th>Ordered Date</th>
                    <th>Order Number</th>
                    <th>Total Qty</th>
                    <th>Total $</th>
                    <th>Order Status</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>January 12, 2023</td>
                    <td>121222</td>
                    <td>123</td>
                    <td>$56.75</td>
                    <td>Finished</td>

                </tr>
                <tr>

                    <td>October 1, 2024</td>
                    <td>233333</td>
                    <td>321</td>
                    <td>$667.75</td>
                    <td>Cancelled</td>

                </tr>
                <tr>

                <td>October 13, 2024</td>
                <td>2335656</td>
                <td>100</td>
            	<td>$560.75</td>
                <td>Finished</td>

                </tr>
                <tr>
                <td>November 23, 2024</td>
                <td>444444</td>
                <td>99</td>
                <td>$77.00</td>
                <td>Finished</td>
                </tr>
                <tr>
					
                <td>December 3, 2024</td>
                <td>55555</td>
                <td>123</td>
                <td>$56.75</td>
                 <td>Finished</td>
                </tr>
                <tr>

                <td>February 27, 2025</td>
                <td>666876</td>
                <td>134</td>
                <td>$156.75</td>
                <td>In transit</td>

                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
