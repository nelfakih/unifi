<?php
  include "careervar.php";
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Jost&family=Oswald:wght@300&display=swap" rel="stylesheet">

<style>
    .profile-pic {
        display: inline-block;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-color: #bbb;
        color: #fff;
        font-size: 60px;
        line-height: 150px;
        text-align: center;
        margin-right: 20px;
        margin-left: auto;
        margin-right: auto;
    }

    h1{
        font-family: Jost;
        background-color: rgb(241, 135, 1);
        font-size: 50px;
        color: black;
        padding: 14px 20px;
        text-align: center;
        margin-right: 35px;
    }

    .boxed {
        border: 1px solid green;
        width: 20%;
    }

    table {
        margin: 0px auto;
        border-collapse: collapse;
        width: 40%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        width: 40%;
        font-weight: bold;
    }

    td {
        width: 60%;
        margin-left: 50px;
    }

    button {
        padding: 8px;
    }

</style>

<title>Success!</title>

<div class="sidenav">
    <div id="sidenavbutt"> 
        <button type="button" class="sidebutton" onclick = "window.location.href='myprofile.php';">My Profile</button>
        <button type="button" class="sidebutton" onclick = "window.location.href='category.php';">All Events</button>
        <button type="button" class="sidebutton" onclick = "window.location.href='myevents.php';">My Events</button>
        <button type="button" class="sidebutton" onclick = "window.location.href='create_event.php';">Create Event</button>
        <button type="button" class="sidebutton" onclick = "window.location.href='firstrequest.php';">Requests</button>
    </div>
</div>

<div class="main">
    <h1>Success!</h1>

<div class="categorybuttons">

 <div>
      <button onclick = "window.location.href='myevents.php';">See My Events</button>
      <button onclick = "window.location.href='category.php';">Continue Browsing</button>
</div>

</div>

<?php

// Connect to the database
$servername = "localhost";
$username = "unifiuser";
$password = "password";
$dbname = "unifidata";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Start a session
session_start();
$username = $_SESSION['username'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Insert the data into the database
$sql = "INSERT IGNORE INTO registeredevents (eventname, eventid, studentemail) VALUES ('$eventname', '$eventid', '$username')";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>

</div>

</html>