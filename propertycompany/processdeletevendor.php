<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Delete Vendor</title>
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
$vendor_email= $_GET["vendor_email"];
$sql= "DELETE FROM vendor WHERE vendor_email='$vendor_email'";
if(mysqli_query($link, $sql))
{
header("Location: http://localhost/propertycompany/managevendors.php");
echo"<h3>Vendor deleted successfully!</h3>";
exit;
}
else
{
echo"<h1>Error</h1>";
echo"<div class='confirmation-page'>";
		echo"<div class='confirmation-box-p'>";
			echo"<h2>Could not delete vendor!</h2>" .mysqli_error($link);
		echo"</div>";
	echo"</div>";
	echo"<div class='bottom-buttons'>";
		echo"<div class='bottom-buttons-row'>";
			echo"<a href='adminhome.php'><button id='home-btn'>Admin Home</button></a>";
			echo"<a href='managevendors.php'><button id='manage-prop-btn'>Manage Vendors</button></a>";
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