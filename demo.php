<?php
// Define MySQL database connection variables
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "meal";

// Create MySQL database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection is successful or not
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// CRUD operations
// Create operation
if (isset($_POST['submit'])) {
    $name = $_POST['mealtype'];
    $email = $_POST['mealname'];
    $phone = $_POST['mealdesc'];
    $sql = "INSERT INTO users (mealtype, mealname, mealdesc) VALUES ('$name', '$email', '$phone')";
    if (mysqli_query($conn, $sql)) {
        echo 'alert("Record created successfully");
    } else {
        echo "Error creating record: " . mysqli_error($conn);
    }
}