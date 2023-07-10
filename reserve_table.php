<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');

require '../vendor/autoload.php';// Include Composer's autoloader
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $servername = "database-1.ceng9favarfc.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "ruppin1234";
    $dbname = "Nadav_Diner";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO reservations (name, email, phone, datetime, partySize) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $data['name'], $data['email'], $data['phone'], $data['datetime'], $data['partySize']);

    if ($stmt->execute()) {
        // Database operation successful, now send the email.
        // Setup PHPMailer
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 2; // Enable verbose debug output
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'in-v3.mailjet.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = '354c4d4e55597812f68d2c7f9a829dc5'; // SMTP username
            $mail->Password = '4900d1056cccdcfe6a3ceaaacf94069d'; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; // TCP port to connect to

            //Recipients
            $mail->setFrom('nadav_res@mail.com', 'Mailer');
            $mail->addAddress($data['email'], $data['name']); // Add a recipient

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Table Reservation';
            $mail->Body    = 'Your table has been reserved.';

            $mail->send();
            echo 'Reservation made and confirmation email sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
