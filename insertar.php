<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$servername = "bb5xoxs42xobjjvazgrw-mysql.services.clever-cloud.com";
$username = "uzyvl6udxqtpzhjm";
$password = "HJms5uW5Z3AoDzTFzire";
$dbname = "bb5xoxs42xobjjvazgrw";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $email = $_POST['email'];
    $passwords = $_POST['password'];
    
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$passwords')";
    
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("message" => "User added successfully"));
    } else {
        echo json_encode(array("message" => "Error: " . $sql . "<br>" . $conn->error));
    }
    
    $conn->close();
}

?>
