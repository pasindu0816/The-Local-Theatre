<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");
require_once("header.php");

$account = new Account($con);

if (isset($_POST["submitButton"])) {

  $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
  $address = FormSanitizer::sanitizeFormString($_POST["address"]);
  $tpNumber = FormSanitizer::sanitizeFormString($_POST["phone"]);
 
  $success = $account->contact($email, $address, $tpNumber);

  if($success) {
      header("Location: index.php");
  }

}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="./CSS/register.css">
    <link rel="stylesheet" href="./CSS/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <div class="signInContainer">

      <div class="column">
        <div class="header">
          <h3>provide contact information</h3>
          <span>to get more familiar with us!</span>
        </div>

        <form method="POST">
          <input type="email" name="email" placeholder="Email" required>
          <input type="text" name="address" placeholder="Address" required>
          <input type="tel" id="phone" name="phone" placeholder="Telephone Number">
          <br>

          <input type="submit" name="submitButton" value="SUBMIT">

        </form>


      </div>

    </div>

  </body>

</html>