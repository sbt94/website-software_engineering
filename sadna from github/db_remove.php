<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, DELETE, PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

// database connection parameters
$servername = "database-website.cco4ga0zip5p.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "ruppin1234";
$dbname = "Nadav_Diner";

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $conn = new mysqli($servername , $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $name = $data->name;

    $sql = "DELETE FROM items;

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $name);

    if ($stmt->execute()) {
        echo "Items deleted successfully.";
    } else {
        echo "Error deleting items: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
