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
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's credentials from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare a SQL statement to retrieve the user's information
    $sql = "SELECT * FROM users WHERE email='$username' AND password='$password'";

    // Execute the SQL statement
    $result = mysqli_query($conn, $sql);

    // Check if a row was returned
    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION["username"] = $username;
        header("location: mainpage.php");
    } else {
        // Login failed
        echo "Invalid username or password.";
    }
}

// Close the database connection
mysqli_close($conn);
?>
