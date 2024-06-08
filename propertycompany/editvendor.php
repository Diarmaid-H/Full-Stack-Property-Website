<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Edit Vendor</title>
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
	<h1>Edit Vendor</h1>
	<?php
	require 'connect.php';
	$vendor_email=$_GET["vendor_email"];
	$sql="SELECT * FROM vendor WHERE vendor_email = '$vendor_email'";
	$result=mysqli_query($link, $sql);
	$row=mysqli_fetch_array($result);
	$vendor_email=$row["vendor_email"];
	$vendor_firstname=$row["vendor_firstname"];
	$vendor_surname=$row["vendor_surname"];
	$vendor_phone=$row["vendor_phone"];
	
	$result=mysqli_query($link, $sql); 
	if(mysqli_num_rows($result)>0) { 
		while($row=mysqli_fetch_array($result)){
			$vendor_email=$row["vendor_email"];
			$vendor_firstname=$row["vendor_firstname"];
			$vendor_surname=$row["vendor_surname"];
			$vendor_phone=$row["vendor_phone"];
		?>
			<div class="add-vendor">
				<div class="add-v-card">
				<form method="post" action="processeditvendor.php">
					<div class="add-v-container">
						<h3><b>Update Vendor Details Here</b></h3>
						<div class="add-v-row2">
							<div class="add-v-row2-left">
								<p>First Name</p>
								<div class="add-v-name">
									<input type="text" class="input-style" id="add-v-name" name="add-v-name" required="required" value="<?php echo"$vendor_firstname"; ?>">
								</div>
							</div>
							<div class="add-v-row2-right">
								<p>Email</p>
								<div class="add-v-email">
									<input type="email" class="input-style" id="add-v-email" name="add-v-email" required="required" value="<?php echo"$vendor_email"; ?>">
								</div>
							</div>
						</div>
						<div class="add-v-row3">
							<div class="add-v-row3-left">
								<p>Surname</p>
								<div class="add-v-surname">
									<input type="text" class="input-style" id="add-v-surname" name="add-v-surname" required="required" value="<?php echo"$vendor_surname"; ?>">
								</div>
							</div>
							<div class="add-v-row3-right">
								<p>Phone</p>
								<div class="add-v-phone">
									<input type="text" class="input-style" id="add-v-phone" name="add-v-phone" required="required" value="<?php echo"$vendor_phone"; ?>">
								</div>
							</div>
						</div>
						<div class="add-v-button-container">
							<button type="submit">Save Changes</button>
						</div>
					</div>
				</form>
				</div>
			</div>
<?php 
		}
	}
?>
		

<div class="bottom-buttons">
	<div class="bottom-buttons-row">
		<a href="adminhome.php"><button id="home-btn">Admin Home</button></a>
		<a href="managevendors.php"><button id="manage-prop-btn">Manage Vendors</button></a>
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
