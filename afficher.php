<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
    
</head>

<style>
    body {
  background-color:  #040717;
  color: #040717;
}

form {
  background-color: crimson;
  padding: 20px;
  width: 400px;
  margin: 0 auto;
}

label {
  display: block;
  font-weight: bold;
  color:#040717 ;
  margin-top: 10px;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #f8f8f8;
  color: #333;
}

input[type="submit"] {
  background-color: #040717;
  color: crimson;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #040717;
  color: #040717;
}

table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: crimson;
  color: #040717;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

button {
  background-color: #040717;
  color: crimson;
  border: none;
  padding: 8px 16px;
  cursor: pointer;
}

button:hover {
  background-color: #e74c3c;
  color: #040717;
}
body {
  background-color:#040717 ;
  color: #fff;
}

form {
  background-color: crimson;
  padding: 20px;
  width: 400px;
  margin: 0 auto;
}

label {
  display: block;
  font-weight: bold;
  color: #fff;
  margin-top: 10px;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color:#040717;
  color: #333;
}

input[type="submit"] {
  background-color: #040717;
  color: crimson;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #e74c3c;
  color: #fff;
}

table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: crimson;
  color: #fff;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
  color:#040717;
}

button {
  background-color: #fff;
  color: crimson;
  border: none;
  padding: 8px 16px;
  cursor: pointer;
}

button:hover {
  background-color: #e74c3c;
  color
}
    </style>
</head>

<body>
    <h3> Display recorded of database </h3>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
    $conn = new mysqli("localhost", "root", "", "web2");
    if ($conn->connect_error) {
        die("Connection failed!" . $conn->connect_error);
    }
    
    if ($conn) {
        // use the $conn variable to query the database
        $result = $conn->query("SELECT * FROM user");

        // iterate through the rows of the result set and display the data
        while($aff = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $aff['id'] . "</td>";
            echo "<td>" . $aff['Name'] . "</td>";
            echo "<td>" . $aff['Email'] . "</td>";
            echo "<td>" . $aff['Subject'] . "</td>";
            echo "<td>" . $aff['Message'] . "</td>";
            echo "<td><a href='modifier.php?id=" . $aff['id'] . "'>Modifier</a> <a href='supprimer.php?id=" . $aff['id'] . "'>Supprimer</a></td>";
            echo "</tr>";
        }
    } else {
        echo "Failed to connect to the database.";
    }
?>

        </tbody>
    </table>
</body>
</html>
