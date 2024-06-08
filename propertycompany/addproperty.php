<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Add Property</title>
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
	<h4 id="add-prop-h4">Fields marked * are required</h4>
	<form method="post" action="processaddproperty.php">
		<div class="add-prop">
			<div class="add-prop-left">
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Address:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-address" name="prop-address" required="required" placeholder=" Address">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Town:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-town" name="prop-town" required="required" placeholder=" Town">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>County:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-county" name="prop-county" required="required" placeholder=" County">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Price:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-price" name="prop-price" required="required" placeholder=" County">
					</div>
				</div>
				<div class="add-prop-row">
					<p>Bedrooms:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-bedrooms" name="prop-bedrooms" placeholder=" Number of bedrooms">
					</div>
				</div>
				<div class="add-prop-row">
					<p>Energy Rating:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-energy-rating" name="prop-energy-rating" placeholder=" Energy Rating">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Square Metres</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-sq-m" name="prop-sq-m" required="required" placeholder=" Square Metres">
					</div>
				</div>
				<div class="add-prop-row">
					<p id="ast-style">*</p><p>Vendor Email:</p>
					<div class="add-prop-details">
					<select name="prop-v-email" class="prop-v-email-select" required="required">
					<option>Select Vendor</option>
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
						<option>Select Category</option>
						<?php
						require 'connect.php';
						$sql="SELECT categoryid, categoryname from category"; 
						$result=mysqli_query($link, $sql); // Run the query
							if(mysqli_num_rows($result)>0)
							{
								
								while($row=mysqli_fetch_array($result))
								{
									$categoryid = $row['categoryid'];
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
						<input type="text" class="input-style" id="prop-image1" name="prop-image1" placeholder=" Image Path">
					</div>
				</div>
				<div class='add-prop-right'>
				</div>
			</div>
			<div class='add-prop-right'>
				<div class="add-prop-row">
					<p>Image 2:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-image2" name="prop-image2" placeholder=" Image 2 Path">
					</div>
				</div>
				<div class='add-prop-row'>
					<p>Image 3:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-image3" name="prop-image3" placeholder=" Image 3 Path">
					</div>
				</div>
				<div class='add-prop-row'>
					<p>Image 4:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-image4" name="prop-image4" placeholder=" Image 4 Path">
					</div>
				</div>
				<div class='add-prop-row'>
					<p>Image 5:</p>
					<div class="add-prop-details">
						<input type="text" class="input-style" id="prop-image5" name="prop-image5" placeholder=" Image 5 Path">
					</div>
				</div>
				<div class='add-prop-row-short'>
					<p id="ast-style">*</p><p>Short Description:</p>
					<div class="add-prop-details-short">
						<textarea rows="4" cols="38"class="input-style" id="short-description" name="short-description" placeholder=" Short Description"></textarea>
					</div>
				</div>
				<div class='add-prop-row-long'>
					<p id="ast-style">*</p><p>Long Description:</p>
					<div class="add-prop-details-long">
						<textarea rows="8" cols="38"class="input-style" id="long-description" name="long-description" placeholder=" Long Description"></textarea>
					</div>
				</div>
				<div class='add-prop-button'>
					<button type="submit">Add Property</button>
				</div>
			</div>
		</div>
	</form>

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
