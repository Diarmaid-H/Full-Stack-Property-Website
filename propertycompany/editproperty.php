<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Edit Property</title>
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
	<h1>Edit Property</h1>
	<?php
	require 'connect.php';
	$propertyid=$_GET["propertyid"];
	$sql="SELECT property.*, category.categoryname
		FROM property
		JOIN category ON property.categoryid = category.categoryid
		WHERE property.propertyid = '$propertyid'
		";
	$result=mysqli_query($link, $sql);
	$row=mysqli_fetch_array($result);
	$address1=$row["address1"];
	$town=$row["town"];
	$county=$row["county"];
	$price=$row["price"];
	$bedrooms=$row["bedrooms"];
	$shortdescription=$row["shortdescription"];
	$longdescription=$row["longdescription"];
	$image=$row["image"];
	$image2=$row["image2"];
	$image3=$row["image3"];
	$image4=$row["image4"];
	$image5=$row["image5"];
	$vendor_email=$row["vendor_email"];
	$categoryname=$row["categoryname"];
	$energyrating=$row["energyrating"];
	$squaremetres=$row["squaremetres"];
	
	$result=mysqli_query($link, $sql); 
	if(mysqli_num_rows($result)>0) { 
		while($row=mysqli_fetch_array($result)){
			$address1=$row["address1"];
			$town=$row["town"];
			$county=$row["county"];
			$price=$row["price"];
			$bedrooms=$row["bedrooms"];
			$shortdescription=$row["shortdescription"];
			$longdescription=$row["longdescription"];
			$image=$row["image"];
			$image2=$row["image2"];
			$image3=$row["image3"];
			$image4=$row["image4"];
			$image5=$row["image5"];
			$vendor_email=$row["vendor_email"];
			$energyrating=$row["energyrating"];
			$squaremetres=$row["squaremetres"];
			$propertyid=$row["propertyid"];
			$categoryname=$row["categoryname"];
			
		?>
	<h4 id="add-prop-h4">Fields marked * are required</h4>
	<form method="post" action="processeditproperty.php">
		<div class="add-prop">
			<div class="add-prop-left">
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Address:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-address" name="prop-address" required="required" value="<?php echo"$address1"; ?>">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Town:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-town" name="prop-town" required="required" value="<?php echo"$town"; ?>">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>County:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-county" name="prop-county" required="required" value="<?php echo"$county"; ?>">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Price:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-price" name="prop-price" required="required" value="<?php echo"$price"; ?>">
					</div>
				</div>
				<div class="add-prop-row">
					<p>Bedrooms:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-bedrooms" name="prop-bedrooms" value="<?php echo"$bedrooms"; ?>">
					</div>
				</div>
				<div class="add-prop-row">
					<p>Energy Rating:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-energy-rating" name="prop-energy-rating" value="<?php echo"$energyrating"; ?>">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Square Metres</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-sq-m" name="prop-sq-m" required="required" value="<?php echo"$squaremetres"; ?>">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Vendor Email:</p>
					<div class="add-prop-details">
					<select name="prop-v-email" class="prop-v-email-select" required="required">
					<?php echo "<option value='$vendor_email'>$vendor_email</option>" ?>
					<?php
					require 'connect.php';
					$sql="SELECT vendor_email from vendor";  
					$result=mysqli_query($link, $sql); 
						if(mysqli_num_rows($result)>0)
						{
							
							while($row=mysqli_fetch_array($result))
							{
								$vendor_email=$row['vendor_email'];
								echo "<option value='$vendor_email'>$vendor_email</option>"; 
							}
						}
					?>
					</select>
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Category:</p>
					<div class="add-prop-details">
						<select name="prop-category" required="required">
						<?php echo "<option value='$categoryid'>$categoryname</option>" ; ?>
						<?php
						require 'connect.php';
						$sql="SELECT categoryid, categoryname from category";  
						$result=mysqli_query($link, $sql); 
							if(mysqli_num_rows($result)>0)
							{
								
								while($row=mysqli_fetch_array($result))
								{
									$categoryid=$row['categoryid'];
									$categoryname=$row['categoryname'];
									echo "<option value='$categoryid'>$categoryname</option>"; 
								}
							}
						?>
					</select>
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Image:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-image1" name="prop-image1" value="<?php echo"$image"; ?>">
					</div>
				</div>
				<div class='add-prop-right'>
				</div>
				 <input type="hidden" name="prop-id" value="<?php echo $propertyid; ?>">
			</div>
			<div class='add-prop-right'>
				<div class="add-prop-row">
					<p>Image 2:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-image2" name="prop-image2" value="<?php echo"$image2"; ?>">
					</div>
				</div>
				<div class='add-prop-row'>
					<p>Image 3:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-image3" name="prop-image3" value="<?php echo"$image3"; ?>">
					</div>
				</div>
				<div class='add-prop-row'>
					<p>Image 4:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-image4" name="prop-image4" value="<?php echo"$image4"; ?>">
					</div>
				</div>
				<div class='add-prop-row'>
					<p>Image 5:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-image5" name="prop-image5" value="<?php echo"$image5"; ?>">
					</div>
				</div>
				<div class='add-prop-row-short'>
					<p id="ast-style">*</p><p>Short Description:</p>
					<div class="add-prop-details-short">
						<textarea rows="4" cols="38"class="input-style" id="short-description" name="short-description" ><?php echo"$shortdescription"; ?></textarea>
					</div>
				</div>
				<div class='add-prop-row-long'>
					<p id="ast-style">*</p><p>Long Description:</p>
					<div class="add-prop-details-long">
						<textarea rows="8" cols="38"class="input-style" id="long-description" name="long-description" ><?php echo"$longdescription"; ?></textarea>
					</div>
				</div>
				<div class='add-prop-button'>
					<button type="submit">Save Changes</button>
				</div>
			</div>
		</div>
	</form>
	
<?php 
		}
	}
?>

<div class="bottom-buttons">
	<div class="bottom-buttons-row">
		<a href="adminhome.php"><button id="home-btn">Admin Home</button></a>
		<a href="manageproperties.php"><button id="manage-prop-btn">Manage Properties</button></a>
		<form action="adminlogout.php" method="POST">
			<button type="submit" id="logout-btn">Logout</button>
		</form>
	</div>
</div>
		
<hr>
</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>
