<?php
header('Access-Control-Allow-Origin: *');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $servername = "database-1.ceng9favarfc.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "ruppin1234";
    $dbname = "Nadav_Diner";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO reservations (name, email, phone, datetime, party_size) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $data['name'], $data['email'], $data['phone'], $data['datetime'], $data['partySize']);

    if ($stmt->execute()) {
        echo "Reservation made successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
