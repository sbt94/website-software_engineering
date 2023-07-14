<?php
// database credentials
$servername = "database-1.ceng9favarfc.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "ruppin1234";
$dbname = "Nadav_Diner";

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO recommendations (customerID, rating, review)
    VALUES (:customerID, :rating, :review)");

    $stmt->bindParam(':customerID', $_POST['customerID']);
    $stmt->bindParam(':rating', $_POST['rating']);
    $stmt->bindParam(':review', $_POST['review']);

    // insert a row
    $stmt->execute();

    // Redirect back to the form page with a confirmation message
    header("Location: Recommendations.php?message=Recommendation submitted successfully");
    exit;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
