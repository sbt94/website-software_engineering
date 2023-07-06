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

    <div class="container">
            <h1>Restaurant Table Reservation</h1>
            <form id="reservation-form">
                <label for="name">Name<span class="required">*</span>:</label>
                <input type="text" id="name" required>

                <label for="email">Email<span class="required">*</span>:</label>
                <input type="email" id="email" required>

                <label for="phone">Phone<span class="required">*</span>:</label>
                <input type="text" id="phone" required>

                <label for="date">Date<span class="required">*</span>:</label>
                <input type="date" id="date" required>

                <label for="time">Time<span class="required">*</span>:</label>
                <input type="time" id="time" required>

                <label for="party-size">Party Size<span class="required">*</span>:</label>
                <select id="party-size" required>
                    <option value="">Select party size</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

                <input type="submit" value="Reserve">
            </form>
        </div>
        <!-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> -->
        <script src="OrderTable.js"></script>
    </body>
</html>