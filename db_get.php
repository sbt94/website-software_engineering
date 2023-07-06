<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "database-1.ceng9favarfc.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "ruppin1234";
$dbname = "Nadav_Diner";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$customerID = $_GET['customerID']; // retrieve the customerID from the request

// prepare and bind
$stmt = $conn->prepare("SELECT * FROM orders WHERE customerID = ?");
$stmt->bind_param("s", $customerID);

// set parameters and execute
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
  // output data of each row
  $items = array();
  while($row = $result->fetch_assoc()) {
    $items[] = $row;
  }
  echo json_encode($items);
} else {
  echo json_encode(array("message" => "No items found"));
}

$stmt->close();
$conn->close();
?>
