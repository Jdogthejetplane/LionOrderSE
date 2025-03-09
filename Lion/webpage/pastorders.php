<?php
echo ("Past Orders pastOrders.php called")
# pull data
# display
?>

<!DOCTYPE html>
<html lang="en">
<!-- metadata (data about the page) in-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name-"viewport" content="width-device-width, initial-scale=1.0">
    <!-- change the tab text-->
    <title>The Local Farm Company - Ordering</title>

<!--External style sheet CSS START-->
<link rel="stylesheet" href="style.css">
<!-- <img class="logo" src="logo.png" alt="The Local Farm Company"  width="50"> -->
</head>

<!-- ********************************* -->

<body class="pastorders">
<!-- anything we want to display goes in the body -->

<!--
   <header>
     <h1>Ordering</h1>
   </header>
-->
<main>

<label class="customerName">CUSTOMER NAME is shopping</label></br>

<a href="Orders.html" class="button-class">Return To Orders</a>

<div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
    <a href="Orders.html">Return to Order</option></a>
  </div>
</div>


<!-- Creating a table -->
<!-- Header, body, footer - header footer bolded by default -->

<table>
<!--New row - headers -->
<thead>
<caption class="tablecaption">Past Orders</caption>
 	<tr>
	<th class="tabdetailText">Ordered Date</th>
	<th class="tabdetailNumeric">Order #</th>
	<th class="tabdetailNumeric">Total Qty</th>
	<th class="tabdetailNumeric">Total $</th>
	<th class="tabdetailNumeric">Status</th>

	</tr>
</thead>
<tbody>
<tr>
<td class="tabdetailText">January 12, 2023</td>
<td class="tabdetailText">121222</td>
<td class="tabdetailNumeric">123</td>
<td class="tabdetailNumeric">$56.75</td>
<td class="tabdetailNumeric">Finished</td>
</tr>

<tr>
<td class="tabdetailText">October 1, 2024</td>
<td class="tabdetailText">233333</td>
<td class="tabdetailNumeric">321</td>
<td class="tabdetailNumeric">$667.75</td>
<td class="tabdetailNumeric">Cancelled</td>
</tr>
<tr>
<td class="tabdetailText">October 13, 2024</td>
<td class="tabdetailText">2335656</td>
<td class="tabdetailNumeric">100</td>
<td class="tabdetailNumeric">$560.75</td>
<td class="tabdetailNumeric">Finished</td>
</tr>
<tr">
<td class="tabdetailText">November 23, 2024</td>
<td class="tabdetailText">444444</td>
<td class="tabdetailNumeric">99</td>
<td class="tabdetailNumeric">$77.00</td>
<td class="tabdetailNumeric">Finished</td>
</tr>

<tr>
<td class="tabdetailText">December 3, 2024</td>
<td class="tabdetailText">55555</td>
<td class="tabdetailNumeric">123</td>
<td class="tabdetailNumeric">$56.75</td>
<td class="tabdetailNumeric">Finished</td>
</tr

<tr>
<td class="tabdetailText">February 27, 2025</td>
<td class="tabdetailText">666876</td>
<td class="tabdetailNumeric">134</td>
<td class="tabdetailNumeric">$156.75</td>
<td class="tabdetailNumeric">In transit</td>
</tr
</tbody>

 <tfoot>
<tr> <!--new row-->
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
</tr>
</tfoot>
</table>

</main>


<footer>

</footer>
</body>


</html>
