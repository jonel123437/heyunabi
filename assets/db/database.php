<?php
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "nostrum";

    // Connect to MySQL server
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword);

    // Check connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create the database if it doesn't exist
    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
    if(mysqli_query($conn, $sql)) {
    } else {
        die("Error creating database: " . mysqli_error($conn));
    }

    // Select the newly created database
    mysqli_select_db($conn, $dbName);

    // Create the table if it doesn't exist
    $tableSql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";

    if(mysqli_query($conn, $tableSql)) {
    } else {
        die("Error creating table: " . mysqli_error($conn));
    }

?>
