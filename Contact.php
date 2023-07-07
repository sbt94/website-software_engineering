<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Nadav's diner" content="width=device-width, initial-scale=1.0">
    <title>Nadav's diner</title>
    <link rel="stylesheet" type="text/css" href="css/ContactUs.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="Main.js"></script> 
</head>
<body>
    <script src="customerID.js"></script>
    <div id="container">
    <?php include 'menu.php'; ?>
    <div class="container">


        <h1>Nadav's Diner</h1>
        <h2>Contact Us</h2>

        <table class="contact-table">
            <tr>
                <th colspan="2">Owners:</th>
            </tr>
            <tr>
                <td>Ben-Tov Shahar:</td>
                <td>Phone number 0525442849, MailAddress - Shahar@gmail.com</td>
            </tr>
            <tr>
                <td>Shneor Ran:</td>
                <td>Phone number 0526105567, MailAddress - Ran@gmail.com</td>
            </tr>
            <tr>
                <th colspan="2">Restaurant Manager:</th>
            </tr>
            <tr>
                <td>Palas Michael:</td>
                <td>Phone number 0503973525, MailAddress - Mishca@gmail.com</td>
            </tr>
            <tr>
                <th colspan="2">Chef:</th>
            </tr>
            <tr>
                <td>Alter Yotam:</td>
                <td>Phone number 0502545007, MailAddress - Yotam@gmail.com</td>
            </tr>
        </table>

        <form id="contact-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required="">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required="">
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required=""></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="contact.js"></script>

</body>
</html>
