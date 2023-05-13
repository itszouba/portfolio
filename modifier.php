<?php
    $conn = new mysqli("localhost", "root", "", "web2");
    if ($conn->connect_error) {
        die("Connection failed!" . $conn->connect_error);
    }
    
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $newName = $_POST['newName'];
    $newEmail = $_POST['newEmail'];
    $newSubject = $_POST['newSubject'];
    $newMessage = $_POST['newMessage'];

  mysqli_query($conn, "UPDATE `user` SET `Name`='$newName', `Email`='$newEmail', 
  `Subject`='$newSubject', `Message`='$newMessage' WHERE `id`='$id'") or die('query failed');
    echo '<p class="success-msg">Modified successfully!</p>';

}

//récupérer les données utilisateur par id
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM `user` WHERE `id`='$id'") or die('query failed');
  $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Editing</title>
  <style>
    body{
      background-color: #0c1022;
    }
    h1 {
      text-align: center;
      color: crimson; 
    }
    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type=text], input[type=email], textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    textarea {
      height: 100px;
    }
    .success-msg {
  background-color: crimson; 
  color: white;
  padding: 10px;
  border-radius: 5px;
  text-align: center;
}

    button[type=submit] {
      background-color: #00ccff;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button[type=submit]:hover {
      background-color: crimson;
    }
  </style>
</head>
<body>
  <h1>Editing</h1>
  <form method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <label for="newName">Name:</label>
    <input type="text" name="newName" value="<?php echo $row['Name'] ?>"><br>
    <label for="newEmail">Email:</label>
    <input type="email" name="newEmail" value="<?php echo $row['Email'] ?>"><br>
    <label for="newSubject">Subject:</label>
    <input type="text" name="newSubject" value="<?php echo $row['Subject'] ?>"><br>
    <label for="newMessage">Message:</label>
    <textarea name="newMessage"><?php echo $row['Message'] ?></textarea><br>
    <button type="submit" name="edit">Save Changes</button>
  </form>

  <table align="center">
		<tr><td align="center"><a href="afficher.php">Show database </a></td></tr>	
</table>
</body>
</html>