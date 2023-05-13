<?php
include "connexion.php";

if(isset($_POST['send'])){
  $Name =  $_POST['Name'];
  $Email =  $_POST['Email'];
  $Subject = $_POST['Subject'];
  $Message = $_POST['Message'];

  $select_message = mysqli_query($conn, "SELECT * FROM `user` WHERE Name ='$Name' AND 
  Email ='$Email' AND Subject = '$Subject' AND Message = '$Message'") or die('query failed');

  if(mysqli_num_rows($select_message) > 0){
    $Message= 'message sent!';
  } else {
    mysqli_query($conn, "INSERT INTO `user` (`Name`, `Email`, `Subject`, `Message`) VALUES (
    '$Name', '$Email', '$Subject', '$Message')") or die('query failed');
    echo '<p class="success-messg">Message sent successfully!</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
.success-messg {
  background-color: crimson;
  border-color: black;
  color: white;
  padding: 12px;
  margin: 20px 0;
  border-radius: 5px;
  text-align: center;
}
</style>
</head>
</html>








