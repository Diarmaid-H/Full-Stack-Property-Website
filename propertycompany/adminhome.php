<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Admin Home</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
 </head>
<body>
<div id="wrapper">
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
<main>
	<h1>Admin Home</h1>
	<div class="admin-cards">
		<div class="admin-card-area">
			<div class="admin-card">
				<div class="admin-image-holder">
					<img src="images/properties.png" class="img-size" alt="Manage Properties Image">
				</div>
				<div class="admin-card-container">
					<h4>Manage Properties</h4>
					<p>Manage properties here</p>
						<div class="button-container">
							<a href='manageproperties.php'><button id="admin-btn">Manage Properties</button></a>
						</div>
				</div>
			</div>
			<div class="admin-card">
				<div class="admin-image-holder">
					<img src="images/vendors.png" class="img-size" alt="Manage Vendors Image">
				</div>
				<div class="admin-card-container">
					<h4>Manage Vendors</h4>
					<p>Manage vendors here</p>
						<div class="button-container">
							<a href='managevendors.php'><button id="admin-btn">Manage Vendors</button></a>
						</div>
				</div>
			</div><div class="admin-card">
				<div class="admin-image-holder">
					<img src="images/Testimonials.png" class="img-size" alt="Manage Testimonials Image">
				</div>
				<div class="admin-card-container">
					<h4>Manage Testimonials</h4>
					<p>Manage testimonials here</p>
						<div class="button-container">
							<a href='managetestimonials.php'><button id="admin-btn">Manage Testimonials</button></a>
						</div>
				</div>
			</div><div class="admin-card">
				<div class="admin-image-holder">
					<img src="images/messages.png" class="img-size" alt="Manage Messages Image">
				</div>
				<div class="admin-card-container">
					<h4>Manage Messages</h4>
					<p>Manage messages here</p>
						<div class="button-container">
							<a href='managemessages.php'><button id="admin-btn">Manage Messages</button></a>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="admin-home-logout">
		<form action="adminlogout.php" method="POST">
			<button type="submit">Logout</button>
		</form>
	</div>
	<div class="admin-home-references">
		<a href="references.php"><button>Image References</button></a>
	</div>
		
<hr>
</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>
