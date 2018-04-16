<?php

include("includes/classes/Account.php");

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
include("includes/classes/Constants.php");

$account = new Account();

function getInputValue($name) {
  if(isset($_POST[$name])) {
    echo $_POST[$name];
  }
}


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Warble - Be Heard</title>
  </head>
  <body>

<div id="inputContainer">
<form id="loginForm" action="register.php" method="POST">
  <h2>Login To Your Account</h2>
  <p>
    <label for="loginUsername"> Username</label>
<input id="loginUsername" name="loginUsername" type="text" placeholder="Enter your username" required>

  </p>

  <p>
    <label for="loginPassword">Password</label>
  <input id="loginPassword" name="loginPassword" type="password" placeholder=" Your password" required>

  </p>

  <button type="submit" name="loginButton">LOGIN</button>

</form>




<form id="registerForm" action="register.php" method="POST">
  <h2>Create Your Free Account</h2>
  <p>
    <?php echo $account->getError(Constants::$userNameCharacters); ?>
    <label for="username"> Username</label>
<input id="username" name="username" type="text" placeholder="Enter your username" value="<?php getInputValue('username');?>" required>

  </p>

  <p>
    <?php echo $account->getError(Constants::$firstNameCharacters); ?>
    <label for="firstName"> First name</label>
<input id="firstName" name="firstName" type="text" placeholder="Enter your first name" value="<?php getInputValue('firstName');?>" required>

  </p>


  <p>
    <?php echo $account->getError(Constants::$lastNameCharacters); ?>
    <label for="lastName"> Last name</label>
<input id="lastName" name="lastName" type="text" placeholder="Enter your last name" value="<?php getInputValue('lastName');?>" required>

  </p>


  <p>
    <?php echo $account->getError(Constants::$emailInvalid); ?>
    <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
    <label for="email"> Email</label>
<input id="email" name="email" type="email" placeholder="Enter your email" value="<?php getInputValue('email');?>" required>

  </p>




  <p>
    <label for="email2">Confirm Email</label>
  <input id="email2" name="email2" type="email" placeholder="Confirm your email" value="<?php getInputValue('email2');?>" required>

  </p>



  <p>
    <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
    <?php echo $account->getError(Constants::$passwordNotAlphanumber); ?>
    <?php echo $account->getError(Constants::$passwordCharacters); ?>

    <label for="password">Password</label>
  <input id="password" name="password" type="password" placeholder="Your password" value="<?php getInputValue('password');?>" required>

  </p>


  <p>
    <label for="password2">Confirm Password</label>
  <input id="password2" name="password2" type="password" placeholder=" Confirm your password" value="<?php getInputValue('password2');?>" required>

  </p>

  <button type="submit" name="registerButton">SIGN UP</button>

</form>


</div>


  </body>
</html>
