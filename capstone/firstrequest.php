<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Jost&family=Oswald:wght@300&display=swap" rel="stylesheet">

<?php 
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
?>

<style>

	h1{
		font-family: Jost;
		background-color: rgb(241, 135, 1);
		font-size: 50px;
		color: black;
		padding: 14px 20px;
		text-align: center;
		margin-right: 35px;
	}

</style>

<title>Requests</title>

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
<div>
	<h1 style="text-align: center;">Requests</h1>
</div>

<div class="categorybuttons">

 <div>
      <button onclick = "window.location.href='accepted.php';">Accepted</button>
      <button onclick = "window.location.href='pending.php';">Pending</button>
</div>


</div>
</div>

</html>