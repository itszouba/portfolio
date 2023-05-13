<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Connect to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "web2";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if username and password match
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM login_table WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // Login successful
    $_SESSION['username'] = $username;
    header('Location: afficher.php');
    exit();
  } else {
    // Login failed
    $error = "Invalid username or password";
  }

  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login From</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="login_form_container">
      <div class="login_form">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
          <p><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
          <div class="input_group">
            <i class="fa fa-user"></i>
            <input
              type="text"
              name="username"
              placeholder="Username"
              class="input_text"
              autocomplete="off"
              required
            />
          </div>
          <div class="input_group">
            <i class="fa fa-unlock-alt"></i>
            <input
              type="password"
              name="password"
              placeholder="Password"
              class="input_text"
              autocomplete="off"
              required
            />
          </div>
          <div class="login_button" id="login_button">
            <button type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </body>
</html>
