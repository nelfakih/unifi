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

<title>My Profile</title>

<div class="sidenav">
	<div id="sidenavbutt"> 
		<button type="button" class="sidebutton">My Profile</button>
  		<button type="button" class="sidebutton">All Events</button>
  		<button type="button" class="sidebutton">My Events</button>
  		<button type="button" class="sidebutton">Requests</button>
	</div>
</div>

<div class="main">
	<h1>My Profile</h1>

<?php 

// Connect to the database
$servername = "localhost";
$username = "unifiuser";
$password = "password";
$dbname = "unifidata";

$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

		// Retrieve the user's information from the SQL database
		$sql = "SELECT fname, lname, email, university, dob FROM users WHERE email='$username'";
		$result = $conn->query($sql);

		// Display the user's information
		if ($result->num_rows>0) {
			$row = $result->fetch_assoc();
			$initials = substr($row["fname"], 0, 1) . substr($row["lname"], 0, 1);
			echo '<br><div class="profile-pic" style="margin-left: 43%;">' . $initials . '</div><br><br><br><br>';
			echo '<table>';
			echo '<tr><th>Name</th><td>' . $row["fname"] . ' ' . $row["lname"] . '</td></tr>';
			echo '<tr><th>Email</th><td>' . $row["email"] . '</td></tr>';
			echo '<tr><th>University</th><td>' . $row["university"] . '</td></tr>';
			echo '<tr><th>Date of birth</th><td>' . $row["dob"] . '</td></tr>';
			echo '</table>';
		} else {
        // Login failed
        echo "Invalid username or password.";
    }


// Close the database connection
mysqli_close($conn);

 ?>

</div>

</html>