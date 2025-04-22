<?php
// Increase the timeout values
ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "OPD";

// Create connection with error handling
$conn = null;
$maxAttempts = 3;
$attempt = 0;

while ($attempt < $maxAttempts && !$conn) {
    try {
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        if (!$conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }

        // Set wait_timeout and interactive_timeout
        mysqli_query($conn, "SET SESSION wait_timeout=600");
        mysqli_query($conn, "SET SESSION interactive_timeout=600");
        
        // Set charset to utf8
        mysqli_set_charset($conn, "utf8");
        
    } catch (Exception $e) {
        $attempt++;
        if ($attempt == $maxAttempts) {
            die("Connection failed after {$maxAttempts} attempts. Please try again later or contact administrator.");
        }
        sleep(1); // Wait for 1 second before retrying
    }
}
?>
