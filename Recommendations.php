<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Recommendations</title>
    <link rel="stylesheet" type="text/css" href="css/Menu.css" />
    <script src="Main.js"></script> 
  </head>
  <body>
    <div id="container">
      <div id="menu">
        <?php include 'menu.php'; ?>
      </div>
      <form action="submitRecommendation.php" method="post">
        <label for="rating">Rating (1-5):</label><br>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br>

        <label for="review">Review:</label><br>
        <textarea id="review" name="review" rows="4" cols="50" required></textarea><br>

        <input type="hidden" id="customerID" name="customerID">

        <input type="submit" value="Submit Recommendation">
      </form>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
            // Fetch customerID from localStorage
            var customerID = localStorage.getItem('customerID');
            
            // Set customerID field's value
            document.getElementById('customerID').value = customerID;
    });
    </script>
      <div id="recommendations">
        <h2>Customer Recommendations</h2>
        <?php
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

        // prepare and bind
        $stmt = $conn->prepare("SELECT * FROM recommendations ORDER BY id DESC");
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<div class='recommendation'>";
            echo "<h3>Rating: " . $row['rating'] . "/5</h3>";
            echo "<p>" . $row['review'] . "</p>";
            echo "</div>";
          }
        } else {
          echo "No recommendations found";
        }

        $stmt->close();
        $conn->close();
        ?>
      </div>
    </div>
  </body>
</html>
