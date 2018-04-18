<?php
    ob_start();
    //wait until you have all the data before sending this to the server
    session_start();

    $timezone = date_default_timezone_set("America/New_York");

    $con = mysqli_connect("localhost","root","", "Warble");
    //connects to local database,username,database password,Database name)

    if(mysqli_connect_errno()) {
     echo "Failed to connect: " . mysqli_connect_errno();

 }



 ?>
