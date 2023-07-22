<?php
// Include the AWS SDK for PHP autoloader
require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

// Set up AWS credentials
$credentials = [
    'key' => 'YOUR_AWS_ACCESS_KEY',
    'secret' => 'YOUR_AWS_SECRET_ACCESS_KEY',
    'region' => 'YOUR_AWS_REGION', // e.g., 'us-east-1'
];

// Set up an S3 client
$s3 = new S3Client([
    'version' => 'latest',
    'credentials' => $credentials,
]);

// Specify the S3 bucket name and target filename
$bucket = 'YOUR_S3_BUCKET_NAME';
$filename = uniqid() . '_' . basename($_FILES['enter-file-textbox']['name']);

// Specify the path where the uploaded file should be saved in S3
$key = 'uploads/' . $filename;

try {
    // Upload the file to S3
    $result = $s3->putObject([
        'Bucket' => $bucket,
        'Key' => $key,
        'SourceFile' => $_FILES['enter-file-textbox']['tmp_name'],
    ]);

    // Get the S3 file URL
    $fileUrl = $result['ObjectURL'];

    // Store the file URL in your database or perform any other necessary operations
    // For example, you can use an SQL query to insert the file URL into your database.

    // Establish a database connection and execute an SQL query
    $dbHost = 'your_database_host';
    $dbUsername = 'your_database_username';
    $dbPassword = 'your_database_password';
    $dbName = 'your_database_name';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if ($conn->connect_error) {
        die('Database connection error: ' . $conn->connect_error);
    }

    // Insert the file URL into your database table
    $fileUrl = $conn->real_escape_string($fileUrl);
    $insertQuery = "INSERT INTO your_table_name (cv_url) VALUES ('$fileUrl')";
    if ($conn->query($insertQuery) === TRUE) {
        echo 'File uploaded and linked to the database successfully.';
    } else {
        echo 'Error: ' . $insertQuery . '<br>' . $conn->error;
    }

    $conn->close();
} catch (S3Exception $e) {
    // Error occurred while uploading the file to S3
    echo 'Error uploading the file: ' . $e->getMessage();
}
?>
