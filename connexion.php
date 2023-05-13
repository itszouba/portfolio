<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web2";

if(isset($_POST['send'])){
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed!" . $conn->connect_error);
    }
    // Check if the required form fields are set
    if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Subject']) && isset($_POST['Message'])){
        // Prepare the query to prevent SQL injection attacks
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE Name=? AND Email=? AND Subject=? AND Message=?");
        $stmt->bind_param("ssss", $_POST['Name'], $_POST['Email'], $_POST['Subject'], $_POST['Message']);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $message = 'Message already sent!';
        }else{
            // Prepare the query to prevent SQL injection attacks
            $stmt = $conn->prepare("INSERT INTO `user` (`Name`, `Email`, `Subject`, `Message`) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $_POST['Name'], $_POST['Email'], $_POST['Subject'], $_POST['Message']);
            $insert_message = $stmt->execute();

            if($insert_message){
                $message = 'Message sent successfully!';
            }else{
                $message = 'Failed to send message!';
            }
        }
    }else{
        $message = 'Please fill in all required fields!';
    }

    echo $message;

}
?>
