<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$servername = "45.228.233.78";
$username = "oscrod89_commers";
$password = "CbTl45226154";
$dbname = "oscrod89_commers";

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