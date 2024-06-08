<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Edit Vendor</title>
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
							
	$vendor_email=mysqli_real_escape_string($link, $_POST['add-v-email']);
	$vendor_firstname=mysqli_real_escape_string($link, $_POST['add-v-name']);
	$vendor_surname=mysqli_real_escape_string($link, $_POST['add-v-surname']);
	$vendor_phone=mysqli_real_escape_string($link, $_POST['add-v-phone']);
	$sql_update="UPDATE vendor SET
		   vendor_email = '$vendor_email', 
                   vendor_firstname = '$vendor_firstname', 
                   vendor_surname = '$vendor_surname', 
                   vendor_phone = '$vendor_phone'
		   WHERE vendor_email = '$vendor_email'";

if(mysqli_query($link, $sql_update)){
	echo"<div class='confirmation-page'>";
		echo"<div class='confirmation-box-v'>";
			echo"<h2>Vendor details updated!</h2>";
		echo"</div>";
	echo"</div>";
	echo"<div class='bottom-buttons'>";
		echo"<div class='bottom-buttons-row'>";
			echo"<a href='adminhome.php'><button id='home-btn'>Admin Home</button></a>";
			echo"<a href='managevendors.php'><button id='manage-prop-btn'>Manage Vendors</button></a>";
			echo"<a href='adminlogout.php'><button id='logout-btn'>Logout</button></a>";
		echo"</div>";
	echo"</div>";
}

else{
	echo "An error occured, try again!";
	echo"<div class='bottom-buttons'>";
		echo"<div class='bottom-buttons-row'>";
			echo"<a href='adminhome.php'><button id='home-btn'>Admin Home</button></a>";
			echo"<a href='managevendors.php'><button id='manage-prop-btn'>Manage Vendors</button></a>";
			echo"<a href='adminlogout.php'><button id='logout-btn'>Logout</button></a>";
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