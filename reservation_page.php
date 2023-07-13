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
  <form action="submitReservation.php" method="post">
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br>

    <label for="cardType">Card Type:</label><br>
    <select id="cardType" name="cardType">
        <option value="visa">Visa</option>
        <option value="mastercard">Mastercard</option>
    </select><br>

    <label for="cardNumber">Card Number:</label><br>
    <input type="text" id="cardNumber" name="cardNumber"><br>

    <label for="expiryDate">Expiry Date:</label><br>
    <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY"><br>

    <label for="cvv">CVV:</label><br>
    <input type="password" id="cvv" name="cvv"><br>

    <!-- Hidden fields for orderDetails and totalPrice -->
    <input type="hidden" id="orderDetails" name="orderDetails">
    <input type="hidden" id="totalPrice" name="totalPrice">

    <input type="submit" value="Make a Reservation">
</form>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', (event) => {
    // Fetch order details and total price using customerID
    var customerID = localStorage.getItem('customerID');
    console.log('Starting fetch operation...');
    fetch('db_get.php?customerID=' + encodeURIComponent(customerID))
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Fetched data:', data);
        var totalPrice = data.reduce((total, item) => total + parseFloat(item.price), 0);
        document.getElementById('orderDetails').value = JSON.stringify(data);
        document.getElementById('totalPrice').value = totalPrice.toFixed(2);
        console.log('Order details:', document.getElementById('orderDetails').value);
        console.log('Total price:', document.getElementById('totalPrice').value);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
  });
    </script>  
    </body>
</html>