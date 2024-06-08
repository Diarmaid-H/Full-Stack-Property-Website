<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Property Details</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
 </head>
<body>
<div id="wrapper">
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
<main>
<?php
	require 'connect.php';
	$propertyid=$_GET["propertyid"];
	$sql = "
		SELECT property.*, category.categoryname, vendor.*
		FROM property
		JOIN category ON property.categoryid = category.categoryid
		JOIN vendor ON property.vendor_email = vendor.vendor_email
		WHERE property.propertyid = '$propertyid'
		";

	
	$result=mysqli_query($link, $sql); 
	if(mysqli_num_rows($result)>0) { 
		while($row=mysqli_fetch_array($result)){
			$address1=$row["address1"];
			$town=$row["town"];
			$county=$row["county"];
			$price=$row["price"];
			$commaprice= number_format($price);
			$bedrooms=$row["bedrooms"];
			$shortdescription=$row["shortdescription"];
			$longdescription=$row["longdescription"];
			$image=$row["image"];
			$image2=$row["image2"];
			$image3=$row["image3"];
			$image4=$row["image4"];
			$image5=$row["image5"];
			$categoryname=$row["categoryname"];
			$energyrating=$row["energyrating"];
			$squaremetres=$row["squaremetres"];
			$vendor_email=$row["vendor_email"];
			$vendor_firstname=$row["vendor_firstname"];
			$vendor_surname=$row["vendor_surname"];
			$vendor_phone=$row["vendor_phone"];
			
		?>
	<div class="prop-details-imgs">
		<div class="prop-img-left">
			<?php echo"<img src='$image' alt='Property Main Image'>"; ?>
		</div>
		<div class="prop-imgs-right">
			<div class="img-row">
				<?php echo"<img src='$image2' class='top-left' alt='Property Second Image'>"; ?>
				<?php echo"<img src='$image3' class='top-right' alt='Property Third Image'>"; ?>
			</div>
			<div class="img-row">
				<?php echo"<img src='$image4' class='bottom-left' alt='Property Fourth Image'>"; ?>
				<?php echo"<img src='$image5' class='bottom-right' alt='Property Fifth Image'>"; ?>
			</div>
		</div>
	</div>
	<div class="prop-details-under-img">
		<div class="prop-details-under-img-left">
			<div class="prop-details-text">
				<?php echo"<h4>$address1, $town, $county </h4>"; ?>
				<?php echo"<h2><b>&#x20AC;$commaprice</b></h2>"; ?>
				<?php echo"<p>$bedrooms Bed - $squaremetres m&sup2; - BER $energyrating</p>"; ?>
				<?php echo"<p>$categoryname</p>"; ?>
			</div>
			<div class="vertical-line">
			</div>
		</div>
		<div class="prop-details-under-img-right">
			<div class="interested-button-container">
				<h3>Does this property interest you?</h3>
				<a href="contactus.php"><button>Contact Us</button></a>
			</div>
		</div>
	</div>
	<hr>
	<div class="about-prop-details">
		<div class="about">
			<div class="about-text">
				<h1>About this property</h1>
				<?php echo"<p>$shortdescription</p>"; ?>
				<?php echo"<p>$longdescription</p>"; ?>
			</div>
			<div class="about-button">
				<a href="contactus.php"><button>Contact Us</button></a>
			</div>
		</div>
		<div class="agent-details">
			<h3>Agent Details</h3>
			<div class="agent-details-flex">
				<div class="req-details">
					<p>Company</p>
					<p>Name</p>
					<p>Email</p>
					<p>Phone</p>
				</div>
				<div class="agent-real-details">
					<p>ABC Properties</p>
					<?php echo"<p>$vendor_firstname $vendor_surname</p>"; ?>
					<?php echo"<p>$vendor_email</p>"; ?>
					<?php echo"<p>$vendor_phone</p>"; ?>
				</div>
			</div>
		

		</div>
	</div>
	
<?php 
		}
	}
	else{
		echo "Issue loading property";
	}
?>
<hr>
</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>
