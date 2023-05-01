<?php
// Start a session
session_start();

// Connect to the database
$servername = "localhost";
$username = "unifiuser";
$password = "password";
$dbname = "unifidata";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$username = $_SESSION['username'];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's credentials from the form
    $eventname = $_POST["eventname"];
    $eventdate = $_POST["eventdate"];
    $location = $_POST["location"];
    $eventtime = $_POST["eventtime"];
    $category = $_POST["category"];
    $creatoremail = $_POST["creatoremail"];
    $host = $_POST["host"];
    $description = $_POST["description"];
    $approved = "No";


    // Prepare a SQL statement to retrieve the user's information
    $sql = "INSERT INTO requestedevents (eventname, eventdate, eventtime, location, category, approved, creatoremail, description, host) VALUES ('$eventname', '$eventdate', '$eventtime', '$location', '$category', '$approved', '$username', '$description', '$host')";

    // Check if a row was returned
    if ($conn->query($sql) === TRUE) {
    header("location: firstrequest.php");
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

// Close the database connection
mysqli_close($conn);
?>
