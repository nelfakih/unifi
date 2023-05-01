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

</style>

<title>My Events</title>

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
	<h1>My Events</h1>

<div class="container">
	<div class="row">

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
		$query = "SELECT DISTINCT * FROM registeredevents JOIN requestedevents ON registeredevents.eventid = requestedevents.eventid WHERE studentemail='$username'";


    	$result = mysqli_query($conn, $query);

    	while ($row = mysqli_fetch_assoc($result)) {
    		echo "<div class='col'>";
    		echo "<div class='card'>";
    		echo "<img src='https://www.example.com/image1.jpg' alt='Kitchen sink' width='200'><center>";
    		echo "<h2>".$row['eventname']."</h2>";
    		echo "</center>";
			echo "<table>";
			echo "<tr><td>Date:</td><td> ".$row['eventdate']." </td></tr>";
			echo "<tr><td>Time:</td><td> ".$row['eventtime']. "</td></tr>";
			echo "<tr><td>Location:</td><td>" .$row['location']. "</td></tr>";
			echo "<tr><td>Host:</td><td>" .$row['host']. "</td></tr></table><p></p>";	
			echo "<center><a onclick='showPopup()'>More Info</a></center><div id='popup'><h2>Description</h2><p>". $row['description'] ."</p><button onclick='hidePopup()'>Close</button></div></div></div>";
    	}

// Close the database connection
mysqli_close($conn);

 ?>

 </div>

  
</div>


</div>


<script>
function showPopup() {
  document.getElementById("popup").style.display = "block";
}

function hidePopup() {
  document.getElementById("popup").style.display = "none";
}

</script>


</html>