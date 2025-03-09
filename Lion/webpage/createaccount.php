<?php
echo ("create Account createAccount.php called")
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

<body class="createAccount">
<!-- anything we want to display goes in the body -->

<!--
   <header>
     <h1>Create Account</h1>
   </header>
-->
<main>

<label class="customerName">CREATE A NEW ACCOUNT</label></br>

<form id="form1" action="newAccount.php" method="get">

<fieldset>
<legend>Registration Information</legend>
<div class="form_col">
  <div class="form-group">
      <div class="form-group">
        <label for="email">Email address: </label>
        <input type="email" id = "email1" name="email1" placeholder="Enter email"
        </input>
        <span>*</span>
      </div>

      <div class="form-group">
        <label for="email2" class="form-label" mt-4>
          Confirm Email: </label>
        <input type="email" id = "email2" name="email2" placeholder="Confirm email"
        </input>
      </div>
      </br>
     <div>
      <label for ="password1">Password:</label>
      <input type="password" id="password1" name="password1"
         placeholder="At least 6 characters">
         <span>*</span>
     </div>
    
     <div>
      <label for ="password2">Renter password:</label>
      <input type="password" id="password2" name="password2"
         placeholder="At least 6 characters">
         <span>*</span>
     </div>
    </fieldset>

<fieldset>
<legend>Member Information</legend>

        <div class="form-group">
          <label for="name">Name: </label>
          <input type="name" class="form-control"
            id = "yourName" name=""yourName" placeholder="Enter name"
          </input>
      </div>
    </br>
      <div class="form-group">
        <label for="address" class="form-label" mt-4>Address: </label>
        <input type="address" class="form-control"
          id = "yourAddress" name="yourAddress" placeholder="Enter Address"
        </input>
    </div>
</br>
<label for="frequency" class="form-label mt-4">
  Email Frequency</label>
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

   <input button type="submit" id="submit_form" name="submit_form" value="Create Account">
   <input button type="button" id="cancel_btn" name="cancel_btn" value="Cancel">
<footer>

</footer>
</body>


</html>
