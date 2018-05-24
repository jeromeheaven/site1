<?php
include("../../config.php");

if(isset($_POST['songId'])) {
  $songId = $_POST['songId'];

  $query = mysqli_query($con, "UPDATE Songs SET plays = plays + 1 WHERE id='$songId'");

  $resultArray = mysqli_fetch_array($query);

  echo json_encode($resultArray);
}




 ?>
