<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, DELETE, PUT");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

// database connection parameters
$servername = "database-1.ceng9favarfc.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "ruppin1234";
$dbname = "Nadav_Diner";

$conn = new mysqli($servername , $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$customerID = $_GET['customerID']; // retrieve the customerID from the request

$sql = "DELETE FROM orders WHERE customerID = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $customerID);

if ($stmt->execute()) {
    echo "Items deleted successfully.";
} else {
    echo "Error deleting items: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
