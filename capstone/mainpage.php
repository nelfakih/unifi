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
  		<button type="button" class="sidebutton" onclick = "window.location.href='category.php';">All Events</button>
  		<button type="button" class="sidebutton" onclick = "window.location.href='myevents.php';">My Events</button>
  		<button type="button" class="sidebutton" onclick = "window.location.href='create_event.php';">Create Event</button>
  		<button type="button" class="sidebutton" onclick = "window.location.href='firstrequest.php';">Requests</button>
	</div>
</div>

<div class="main">
<center><h1>All Events</h1>
<div class="container">
		<div class="row">
			<div class="col">
				<div class="card">
					<img src="https://www.example.com/image1.jpg" alt="Kitchen sink" width="200">
					<center><h2>GW Museum Tour</h2></center>
					<table>
						<tr><td>Hello :</td><td>Bye</td></tr>
						<tr><td>Hello :</td><td>Bye</td></tr>
						<tr><td>Hello :</td><td>Bye</td></tr>
					</table>
					<p></p>
					<center><a href="#">More Info</a>
					<a href="#">Register</a></center>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="https://www.example.com/image2.jpg" alt="Kitchen sink" width="200">
					<h2>Card 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus ex sed purus dictum consequat.</p>
					<a href="#">Button 1</a>
					<a href="#">Button 2</a>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="https://www.example.com/image2.jpg" alt="Kitchen sink" width="200">
					<h2>Card 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus ex sed purus dictum consequat.</p>
					<a href="#">Button 1</a>
					<a href="#">Button 2</a>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="https://www.example.com/image2.jpg" alt="Kitchen sink" width="200">
					<h2>Card 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus ex sed purus dictum consequat.</p>
					<a href="#">Button 1</a>
					<a href="#">Button 2</a>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="https://www.example.com/image2.jpg" alt="Kitchen sink" width="200">
					<h2>Card 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus ex sed purus dictum consequat.</p>
					<a href="#">Button 1</a>
					<a href="#">Button 2</a>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="https://www.example.com/image2.jpg" alt="Kitchen sink" width="200">
					<h2>Card 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus ex sed purus dictum consequat.</p>
					<a href="#">Button 1</a>
					<a href="#">Button 2</a>
				</div>
			</div>
		
			<div class="col">
				<div class="card">
					<img src="https://www.example.com/image2.jpg" alt="Kitchen sink" width="200">
					<h2>Card 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus ex sed purus dictum consequat.</p>
					<a href="#">Button 1</a>
					<a href="#">Button 2</a>
				</div>
			</div>

			<div class="col">
				<div class="card">
					<img src="https://www.example.com/image2.jpg" alt="Kitchen sink" width="200">
					<h2>Card 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus ex sed purus dictum consequat.</p>
					<a href="#">Button 1</a>
					<a href="#">Button 2</a>
				</div>
			</div>



		</div>
	</div>

  
</div>

</html>