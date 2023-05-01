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

<title>Create an Event</title>

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
	<h1 style="text-align: center;">Create an Event</h1>
	</div>
	<div class="form">
	<form class="form-wrapper" method="post" action="eventrequest.php">
		<fieldset>
			
		<table>
			<tr>
				<td>Event Name: </td>

				<td> <input type="text" id="eventname" name="eventname"></td>
			</tr>

			<tr>
				<td>Date: </td>
			
				<td> <input type="date" id="eventdate" name="eventdate"></td>
			</tr>

			<tr>
				<td>Time: </td>
			
				<td> <input type="time" id="eventtime" name="eventtime"></td>
			</tr>

			<tr>
				<td>Location: </td>
			
				<td> <input type="text" id="location" name="location"></td>
			</tr>

			<tr>
			<td>Category: </td>
			<td>
			<select id="category" name="category">
			  <option value="sports">Sports</option>
			  <option value="art">Art</option>
			  <option value="music">Music</option>
			  <option value="career">Career</option>
			  <option value="education">Education</option>
			  <option value="tourism">Tourism</option>
			  <option value="other">Other</option>
			</select>
			</td>
			</tr>

			<tr>
				<td>Host: </td>
			
				<td> <input type="text" id="host" name="host"></td>
			</tr>


			<tr>
				<td>Description: </td>
			
				<td> <input type="text" id="description" name="description"></td>
			</tr>
		</table>
		<button type="submit" class="sidebutton">Create Event</button>
		</fieldset>
</form>
</div>
  
</div>

</html>



