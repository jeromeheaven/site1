<?php
include("includes/config.php");

session_destroy();
//Delete this later because it maunally logs you out(temp until create login button)
if(isset($_SESSION['userLoggedIn'])) {
$userLoggedIn = $_SESSION['userLoggedIn'];

}
else {
  header("Location: register.php");
}


 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Browse - Featured</title>
  </head>
  <body>








  </body>
</html>
