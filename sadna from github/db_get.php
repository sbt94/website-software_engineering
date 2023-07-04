<?php
// headers for allowing cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// database connection parameters
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

// query to get all rows from the table
$sql = "SELECT * FROM items";
$result = $conn->query($sql);

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

$conn->close();
?>
