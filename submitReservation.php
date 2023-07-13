<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="Nadav's diner" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Cart</title>
    <link rel="stylesheet" type="text/css" href="css/Menu.css" />
    <script src="Main.js"></script> 
  </head>
  <body>
    <script src="customerID.js"></script>
        <div id="container">
            <div id="menu">
                <?php include 'menu.php'; ?>
            </div>
            <?php
// Database credentials
$servername = "database-1.ceng9favarfc.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "ruppin1234";
$dbname = "Nadav_Diner";

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL and bind parameters for reservation
    $stmt = $conn->prepare("INSERT INTO new_reservations (address, cardType, cardNumber, expiryDate, cvv, orderDetails, totalPrice)
    VALUES (:address, :cardType, :cardNumber, :expiryDate, :cvv, :orderDetails, :totalPrice)");

    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':cardType', $cardType);
    $stmt->bindParam(':cardNumber', $cardNumber);
    $stmt->bindParam(':expiryDate', $expiryDate);
    $stmt->bindParam(':cvv', $cvv);
    $stmt->bindParam(':orderDetails', $orderDetails);
    $stmt->bindParam(':totalPrice', $totalPrice);

    // Insert a row
    $address = $_POST['address'];
    $cardType = $_POST['cardType'];
    $cardNumber = $_POST['cardNumber'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];
    $orderDetails = $_POST['orderDetails']; // This should be a JSON string
    $totalPrice = $_POST['totalPrice'];

    $stmt->execute();

    // Prepare SQL for deleting orders
    $stmt = $conn->prepare("DELETE FROM orders WHERE customerID = :customerID");
    $stmt->bindParam(':customerID', $customerID);

    // Delete orders
    $customerID = $_POST['customerID'];

    $stmt->execute();

    // Redirect back to the form page with a confirmation message
    $delete_url = 'http://34.239.35.228/db_remove_cart.php?customerID=' . urlencode($customerID);
    $delete_result = file_get_contents($delete_url);
    header("Location: Cart.php?message=Reservation successful");
    exit;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>

        </div>
</body>
</html>