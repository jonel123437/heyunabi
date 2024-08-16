<?php
    require "assets/db/database.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users(email, password) VALUES ('$email', '$password')";

    if($conn->query($sql) === TRUE) {

        header("Location: index.php");

    } else {

        }
    }

?>