<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Sites</title>
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
	<h1>Sites</h1>
	<div class="prop-cards">
	<div class="card-area">
	<?php
	require 'connect.php';
	$sql = "
		SELECT DISTINCT property.*, category.categoryname
		FROM property
		JOIN category ON property.categoryid = category.categoryid
		WHERE category.categoryname = 'site'
		";
	$result=mysqli_query($link, $sql);
	$row=mysqli_fetch_array($result);
	$propertyid=$row["propertyid"];
	$address1=$row["address1"];
	$town=$row["town"];
	$county=$row["county"];
	$price=$row["price"];
	$commaprice= number_format($price);
	$bedrooms=$row["bedrooms"];
	$shortdescription=$row["shortdescription"];
	$longdescription=$row["longdescription"];
	$image=$row["image"];
	$categoryname=$row["categoryname"];
	$energyrating=$row["energyrating"];
	$squaremetres=$row["squaremetres"];
	
	$result=mysqli_query($link, $sql); 
	if(mysqli_num_rows($result)>0) { 
		while($row=mysqli_fetch_array($result)){
			$propertyid=$row["propertyid"];
			$address1=$row["address1"];
			$town=$row["town"];
			$county=$row["county"];
			$price=$row["price"];
			$commaprice= number_format($price);
			$bedrooms=$row["bedrooms"];
			$shortdescription=$row["shortdescription"];
			$longdescription=$row["longdescription"];
			$image=$row["image"];
			$categoryname=$row["categoryname"];
			$energyrating=$row["energyrating"];
			$squaremetres=$row["squaremetres"];
			
		?>
			
		<div class="card">
			<div class="image-holder">
				<?php echo"<a href='phptestpropertydetails.php?propertyid=$propertyid'><img src='$image' class='img-size' alt='Property Listing Image'></a>"; ?>
			</div>
			<div class="container">
				<?php echo"<h4>$address1, $town</h4>"; ?>
				<div class="prop-fixed">
					<div class="prop-county">
						<?php echo"<h4>$county</h4>"; ?>
					</div>
					<div class="prop-price">
						<?php echo"<h2><b>&#x20AC;$commaprice</b></h2>"; ?>
					</div>
					<div class="prop-details">
						<?php echo"<p>$squaremetres m&sup2;</p>"; ?>
						<?php echo"<p>$categoryname</p>"; ?>
					</div>
				</div>
					<div class="button-container">
						<?php echo"<a href='phptestpropertydetails.php?propertyid=$propertyid'><button>More Details</button></a>"; ?>
					</div>
			</div>
		</div>
<?php 
		}
	}
	else{
		echo "No properties found";
	}
?>
</div>
</div>
<hr>
	
</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>
