<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Add Property</title>
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

	<h1>Add Property</h1>

<?php
require 'connect.php';
							
	$address1=mysqli_real_escape_string($link, $_POST['prop-address']);
	$town=mysqli_real_escape_string($link, $_POST['prop-town']);
	$county=mysqli_real_escape_string($link, $_POST['prop-county']);
	$price=mysqli_real_escape_string($link, $_POST['prop-price']);
	$bedrooms=mysqli_real_escape_string($link, $_POST['prop-bedrooms']);	
	$shortdescription=mysqli_real_escape_string($link, $_POST['short-description']);
	$longdescription=mysqli_real_escape_string($link, $_POST['long-description']);
	$image=mysqli_real_escape_string($link, $_POST['prop-image1']);
	$image2=mysqli_real_escape_string($link, $_POST['prop-image2']);
	$image3=mysqli_real_escape_string($link, $_POST['prop-image3']);
	$image4=mysqli_real_escape_string($link, $_POST['prop-image4']);
	$image5=mysqli_real_escape_string($link, $_POST['prop-image5']);
	$categoryid=mysqli_real_escape_string($link, $_POST['prop-category']);
	$vendor_email=mysqli_real_escape_string($link, $_POST['prop-v-email']);
	$energyrating=mysqli_real_escape_string($link, $_POST['prop-energy-rating']);
	$squaremetres=mysqli_real_escape_string($link, $_POST['prop-sq-m']);
	$sql_insert="INSERT INTO property(address1, town, county, price, bedrooms, shortdescription, longdescription, image, image2, image3, image4, image5, categoryid, vendor_email, energyrating, squaremetres) VALUES ('$address1', '$town', '$county', '$price', '$bedrooms', '$shortdescription', '$longdescription', '$image', '$image2', '$image3', '$image4', '$image5', '$categoryid', '$vendor_email', '$energyrating', '$squaremetres')";

if(mysqli_query($link, $sql_insert)){
	echo"<div class='confirmation-page'>";
		echo"<div class='confirmation-box-p'>";
			echo"<h2>Property added successfully!</h2>";
			echo"<a href='addproperty.php'><button>Add another</button></a>";
		echo"</div>";
	echo"</div>";
	echo"<div class='bottom-buttons'>";
		echo"<div class='bottom-buttons-row'>";
			echo"<a href='adminhome.php'><button id='home-btn'>Admin Home</button></a>";
			echo"<a href='manageproperties.php'><button id='manage-prop-btn'>Manage Properties</button></a>";
			echo"<form action='adminlogout.php' method='POST'>";
				echo"<button type='submit' id='logout-btn'>Logout</button>";
			echo"</form>";
		echo"</div>";
	echo"</div>";
}

else{
	echo "An error occured, try again!" ;
	echo "Ensure vendor email and category has been selected!";
	echo"<div class='bottom-buttons'>";
		echo"<div class='bottom-buttons-row'>";
			echo"<a href='adminhome.php'><button id='home-btn'>Admin Home</button></a>";
			echo"<a href='addproperty.php'><button id='manage-prop-btn'>Add Property</button></a>";
			echo"<form action='adminlogout.php' method='POST'>";
				echo"<button type='submit' id='logout-btn'>Logout</button>";
			echo"</form>";
		echo"</div>";
	echo"</div>";
}

mysqli_close($link);
?>

<hr>
</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>