<?php
// Example database configuration. 
// Copy this file to db.php and fill in your credentials.
error_reporting(E_ALL);
ini_set('display_errors', 1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "localhost";
$db_user = "your_username";
$db_pass = "your_password"; 
$db_name = "your_database_name";

try {
    $conn = new mysqli($host, $db_user, $db_pass, $db_name);
} catch (Exception $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
