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
    <div class="container mt-5">
        <header class="text-center mb-4">
            <h2 class="display-4">Past Orders</h2>
        </header>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <label class="h5">CUSTOMER NAME is currently hopping</label>
            <a href="order.php" class="btn btn-primary">Return To Orders</a>
        </div>

        <div class="dropdown mb-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                MENU
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="order.php">Return to Order</a></li>
            </ul>
        </div>

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
