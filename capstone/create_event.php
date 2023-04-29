

<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

<?php 
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
?>

<div class="sidenav">
	<div id="sidenavbutt"> 
		<button type="button" class="sidebutton" onclick = "window.location.href='myprofile.php';">My Profile</button>
  		<button type="button" class="sidebutton">All Events</button>
  		<button type="button" class="sidebutton">My Events</button>
  		<button type="button" class="sidebutton">Create Event</button>
  		<button type="button" class="sidebutton">Requests</button>
	</div>
</div>

<div class="main">
	<div class="form">
	<form>
		<fieldset>
			<center><legend>Create an Event</legend></center>
		<table>
			<tr>
				<td>Event Name: </td>

				<td> <input type="text" name=""></td>
			</tr>

			<tr>
				<td>Date: </td>
			
				<td> <input type="text" name=""></td>
			</tr>

			<tr>
				<td>Time: </td>
			
				<td> <input type="text" name=""></td>
			</tr>

			<tr>
				<td>Category: </td>
			
				<td> <input type="text" name=""></td>
			</tr>

			<tr>
				<td>Description: </td>
			
				<td> <input type="text" name=""></td>
			</tr>
		</table>
		</fieldset>
</form>
</div>
  
</div>

</html>



