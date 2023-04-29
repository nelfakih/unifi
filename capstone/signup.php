<?php
// Start a session
session_start();

// Connect to the database
$servername = "localhost";
$username = "unifiuser";
$password = "password";
$dbname = "unifidata";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize the form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$university = $_POST['university'];
$dob = $_POST['dob'];
$password = $_POST['password'];

// Insert the data into the database
$sql = "INSERT INTO users (fname, lname, email, university, dob, password) VALUES ('$fname', '$lname', '$email', '$university', '$dob', '$password')";


if ($conn->query($sql) === TRUE) {
    echo "<h1>Data stored successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>