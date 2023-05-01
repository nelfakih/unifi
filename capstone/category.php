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

<title>Events</title>
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
  <h1>All Events</h1>

<div class="categorybuttons">

 <div>
      <button onclick = "window.location.href='sports.php';">Sports</button>
      <button onclick = "window.location.href='art.php';">Art</button>
      <button onclick = "window.location.href='music.php';">Music</button>
    </div>
    <div>
      <button onclick = "window.location.href='career.php';">Career</button>
      <button onclick = "window.location.href='education.php';">Education</button>
      <button onclick = "window.location.href='tourism.php';">Tourism</button>
    </div>
    <div>
      <center><button onclick = "window.location.href='other.php';">Other</button></center>
    </div>


</div>
</div>

</html>