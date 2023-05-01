<?php 

// Connect to the database
$servername = "localhost";
$username = "unifiuser";
$password = "password";
$dbname = "unifidata";

$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();
$username = $_SESSION['username'];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the user's information from the SQL database
$category = "career";
$query = "SELECT eventname,eventid FROM requestedevents WHERE category='$category' AND approved='Yes'";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$eventname = $row['eventname'];
$eventid = $row['eventid'];

// Close the database connection
mysqli_close($conn);
 ?>
