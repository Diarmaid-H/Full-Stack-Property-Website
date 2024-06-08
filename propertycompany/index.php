<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>ABC Ltd Home</title>
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
	<div class="img-container">
		<img src="images/main.png" alt="Home page top image">
		<div class="image-text">
			<h1>Discover Your Next Address</h1>
		</div>
		<div class="search-bar">
			<form action="search.php" method="get" id="search-form">
				<input type="text" placeholder="Search by County here" name="search">
				<input type="hidden" name="search-sent" value="1">
				<button type="submit" name="search-btn">
					<i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<div class="search-button">
			<button type="submit" id="search-button-id" class="search-button-style" onclick="submitSearchForm()">Search Properties</button>
		</div>
	</div>
	<div class="home-text">
		<div class="home-text-left">
			<h2>At ABC Limited, we're here for everyone, no matter where you are in life.</h2><p>
			<h3>Whether you're a first-time buyer, exploring commercial properties, or everything in between, we've got you covered.</h3><p>
			<h3>Our mission is to make your property journey smooth, enjoyable, and tailored to your unique needs.</h3><p>
		</div>
		<div class="home-text-right">
			<div class="gradient-rectangle">
			</div>
			<div class="gradient-text">
				<h3>" 5 Stars! "</h3>
				<h3>"I couldn't be happier with the service provided by ABC Ltd" - Michael W.</h3>
			</div>
			<div class="gradient-button">
				<a href="phptestcard.php"><button><h3>Explore Properties</h3></button></a>
			</div>
		</div>
	</div>
	<div class="browse-text">
		<h1>Browse by Property Type</h1>
	</div>
	<div class="browse-line">
		<hr>
	</div>
	<div class="card-area">
		<div class="card">
			<div class="image-holder">
				<a href="phptestcardresidential.php"><img src="images/residential.jpg" class="img-size" alt="Residential Properties Image"></a>
			</div>
			<div class="container">
				<h3><b>Residential</b></h3>
				<p>Discover cozy homes and vibrant neighbourhoods in our residential listings</p>
				<div class="button-container">
					<a href="phptestcardresidential.php"><button id="residential-btn">Browse Residential</button></a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="image-holder">
				<a href="phptestcardcommercial.php"><img src="images/commercial.jpg" class="img-size" alt="Commercial Properties Image"></a>
			</div>
			<div class="container">
				<h3><b>Commercial</b></h3>
				<p>Browse our selection of commercial properties for your business needs</p>
				<div class="button-container">
					<a href="phptestcardcommercial.php"><button id="commercial-btn">Browse Commercial</button></a>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="image-holder">
				<a href="phptestcardsites.php"><img src="images/site.PNG" class="img-size" alt="Sites Properties Image"></a>
			</div>
			<div class="container">
				<h3>Sites</h3>
				<p>Explore our range of sites and find the perfect location for your next project</p>
				<div class="button-container">
					<a href="phptestcardsites.php"><button id ="sites-btn">Browse Sites</button></a>
				</div>
			</div>
		</div>	
	</div>
<hr>
<script>
function submitSearchForm() {
    document.getElementById('search-form').submit();
}
</script>
</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>
