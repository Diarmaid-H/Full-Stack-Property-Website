<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Delete Vendor</title>
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
<?php
require 'connect.php';
$vendor_email=$_GET['vendor_email'];
$sql="SELECT * from vendor where vendor_email='$vendor_email'";
$result=mysqli_query($link, $sql);
	echo "<h3>Confirm Delete Vendor</h3>";
	
$row=mysqli_fetch_array($result);
	$vendor_email=$row["vendor_email"];
	
	echo"<div class='confirm-delete-v'>";
		echo"<div class='confirm-delete-v-box'>";
			echo"<h3>Are you sure you want to delete the vendor with the email $vendor_email ? </h3>";
			echo"<div class='confirm-v-buttons'>";
				echo"<a href='processdeletevendor.php?vendor_email=$vendor_email'><button id='delete-v-button'>Delete</button></a>";
				echo"<a href='managevendors.php'><button id='cancel-delete-v-button'>Cancel</button></a>";
			echo"</div>";
		echo"</div>";
	echo"</div>";
	
mysqli_close($link);
?>


<hr>
</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>
