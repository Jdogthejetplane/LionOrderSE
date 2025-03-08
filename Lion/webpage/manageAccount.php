<?php
echo ("manage Account manageAccount.php called")
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

<body class="manageAccount">
<!-- anything we want to display goes in the body -->

<!--
   <header>
     <h1>manage Account</h1>
   </header>
-->
<main>

<label class="customerName">CUSTOMER NAME is MANAGING ACCOUNT</label></br>

<a href="Orders.html" class="button-class">Return To Orders</a>

<div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
    <a href="Orders.html">Return to Order</option></a>
  </div>
</div>

<form id="form1" action="join.php" method="get">

<fieldset>
<legend>Account Information</legend>
<div class="account-div-group">
        <label for="email">Email address: </label>
        <input type="email" id = "email1" name="email1" placeholder="Enter email">
 	<input button type="button" id="changeEmail_btn" name="changeEmail_btn" value="Change Email">
      </br>

      <label for ="password1">Password                  :</label>
      <input type="password" id="password1" name="password1" placeholder="*****">
      <input button type="button" id="changePassword_btn" name="changePassword_btn" value="Change Password">
      </br>

      <label for="name">Name: </label>
      <input type="name" class="form-control"
         id = "yourName" name=""yourName" placeholder="Enter name">
      <input button type="button" id="changeName_btn" name="changeName_btn" value="Change Name">
      </br>
       
      <label for="address" class="form-label" mt-4>Address: </label>
      <input type="address" class="form-control"
          id = "yourAddress" name="yourAddress" placeholder="Enter Address">
      <input button type="button" id="changeAddress_btn" name="changeAddress_btn" value="Change Address">
</div>

</br>
<label for="frequency" class="form-label mt-4">
  Email News Letter Frequency</label>
  <select class="form-select" id = "emailFrequency">
    <option value="0">Never</option>
    <option value="1">Weekly</option>
    <option value="2">Bi-Weekly</option>
    <option value="3">Monthly</option>
    <option value="4">Quarterly</option>
  </select>

<h4>Loyalty Membership Class</h4>
<!-- radio buttons !-->
<input class="form-check-input" type="radio" name="membership"
  id="noMembership" value="none">
  <label class="form-check-input" for="basic">No Membership </label>
   </br>
<input class="form-check-input" type="radio" name="membership"
  id="basicMembership" value="basic">
  <label class="form-check-input" for="basic">Basic Membership </label>
   </br>
  <input class="form-check-input" type="radio" name="membership"
  id="silverMembership" value="silver">
  <label class=""form-check-input for="silver">Silver Membership </label>
</br>
  <input class="form-check-input" type="radio" name="membership"
  id="goldMembership" value="gold" checked>
  <label class=""form-check-input for="gold">Gold Membership </label>
   </br>
   </br>

</fieldset>

</form>
</main>


<footer>

</footer>
</body>


</html>
