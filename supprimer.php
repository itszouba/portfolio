<?php
    $conn = new mysqli("localhost", "root", "", "web2");
    if ($conn->connect_error) {
        die("Connection failed!" . $conn->connect_error);
    }
    
if(isset($_GET['id'])){
  $id = $_GET['id'];

  mysqli_query($conn, "DELETE FROM `user` WHERE `id` = $id") or die('query failed');
  echo '<p class="success-message">Deleted successfully!</p>';

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Delete</title>
<style>
  body{
    background-color: #0c1022;
  }
  .success-message {
  background-color: crimson; 
  color: white;
  padding: 10px;
  border-radius: 5px;
  text-align: center;
}

</style>
</head>
<body>
<br><br><center><a href="afficher.php">Show Table </a></center><br>

