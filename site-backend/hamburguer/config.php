<?php
// Basic connection settings
$databaseHost = '192.168.100.20';
$databaseUsername = 'scooby';
$databasePassword = 'burg';
$databaseName = 'scoobyburg';

// Connect to the database
$connection = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";
?>