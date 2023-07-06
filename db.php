<?php
header('Access-Control-Allow-Origin: *');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = json_decode(file_get_contents('php://input'), true);

    // $servername = "database-website.cco4ga0zip5p.us-east-1.rds.amazonaws.com";
    // $username = "admin";
    // $password = "ruppin1234";
    // $dbname = "Nadav_Diner";

    // $servername = "sql304.byethost7.com";
    // $username = "b7_34388903";
    // $password = "tziyunKAL";
    // $dbname = "b7_34388903_db";

    $servername = "database-1.ceng9favarfc.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "ruppin1234";
    $dbname = "Nadav_Diner";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //check connection  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO orders (name, price, img, description, customerID) VALUES (?, ?, ?, ?, ?)");
    // Bind parameters to the SQL statement
    $stmt->bind_param("sdss", $item['name'], $item['price'], $item['img'], $item['description'], $item['customerID']);

    // Execute the prepared SQL statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
