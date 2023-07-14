<?php
$servername = "database-1.ceng9favarfc.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "ruppin1234";
$dbname = "Nadav_Diner";

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare sql and bind parameters for the reservation
    $stmt = $conn->prepare("INSERT INTO new_reservations (address, cardType, cardNumber, expiryDate, cvv, orderDetails, totalPrice)
    VALUES (:address, :cardType, :cardNumber, :expiryDate, :cvv, :orderDetails, :totalPrice)");

    $stmt->bindParam(':address', $_POST['address']);
    $stmt->bindParam(':cardType', $_POST['cardType']);
    $stmt->bindParam(':cardNumber', $_POST['cardNumber']);
    $stmt->bindParam(':expiryDate', $_POST['expiryDate']);
    $stmt->bindParam(':cvv', $_POST['cvv']);
    $stmt->bindParam(':orderDetails', $_POST['orderDetails']);
    $stmt->bindParam(':totalPrice', $_POST['totalPrice']);

    $stmt->execute();

    // Prepare sql for deleting cart items
    //echo "CustomerID: " . $_POST['customerID']; //~
    //file_put_contents('log.txt', "CustomerID: " . $_POST['customerID'], FILE_APPEND); //~
    $stmt = $conn->prepare("DELETE FROM orders WHERE customerID = :customerID");
    $stmt->bindParam(':customerID', $_POST['customerID']);

    $stmt->execute();

    // Redirect back to the form page with a confirmation message
    header("Location: Cart.php?message=Reservation successful");
    exit;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
