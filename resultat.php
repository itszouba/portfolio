<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <?php
    // Include the database connection file
    require_once('connexion.php');

    // Check if the form was submitted
    if(isset($_POST['send'])){
        // Check if required fields are not empty
        if(!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Subject']) && !empty($_POST['Message'])) {
            // Prepare and execute the query to prevent SQL injection attacks
            $stmt = $conn->prepare("SELECT * FROM `user` WHERE Name=? AND Email=? AND Subject=? AND Message=?");
            $stmt->bind_param("ssss", $_POST['Name'], $_POST['Email'], $_POST['Subject'], $_POST['Message']);
            $stmt->execute();
            $result = $stmt->get_result();
    
            // Check if the message already exists in the database
            if($result->num_rows > 0){
                $message = 'Message already sent!';
            }else{
                // Prepare and execute the query to prevent SQL injection attacks
                $stmt = $conn->prepare("INSERT INTO `user` (`Name`, `Email`, `Subject`, `Message`) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $_POST['Name'], $_POST['Email'], $_POST['Subject'], $_POST['Message']);
                $insert_message = $stmt->execute();
    
                // Check if the message was successfully inserted into the database
                if($insert_message){
                    $message = 'Message sent successfully!';
                }else{
                    $message = 'Failed to send message!';
                }
            }
        }else{
            $message = 'Please fill in all required fields!';
        }
    }else{
        $message = 'Form not submitted!';
    }    
    ?>
</body>
</html>
