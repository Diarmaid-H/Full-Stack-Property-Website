<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Vendors</title>
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
	<h1>Manage Vendors</h1>
		
	<?php
require 'connect.php';
$sql="SELECT * from vendor";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0){
	echo"<div class='vendor-table'>";
		echo "<table>";
		echo"<tr>
			<th class='v-col1'>Email</th>
			<th class='v-col2'>First Name</th>
			<th class='v-col3'>Surname</th>
			<th class='v-col4'>Phone Number</th>
			<th class='v-colbtn'>Edit</th>
			<th class='v-colbtn'>Delete</th>
			</tr>";

		while($row=mysqli_fetch_array($result)){
			$vendor_email=$row["vendor_email"];
			$vendor_firstname=$row["vendor_firstname"];
			$vendor_surname=$row["vendor_surname"];
			$vendor_phone=$row["vendor_phone"];

		echo"<tr>
			<td class='v-col1'><b>$vendor_email</b></td>
			<td class='v-col2'>$vendor_firstname</td>
			<td class='v-col3'>$vendor_surname</td>
			<td class='v-col4'>$vendor_phone</td>
			<td class='v-table-btn-edit'><a href='editvendor.php?vendor_email=$vendor_email'><button>Edit</button></a></td>
			<td class='v-table-btn-delete'><a href='deletevendor.php?vendor_email=$vendor_email'><button>Delete</button></a></td>
			</tr>";
		}
	echo"</div>";
		echo"<table>";
		}
		else{
			echo"No entries found";
		}
		mysqli_close($link);
	
?>

<div class="bottom-buttons">
	<div class="bottom-buttons-row">
		<a href="adminhome.php"><button id="home-btn">Admin Home</button></a>
		<a href="addvendor.php"><button id="manage-prop-btn">Add a Vendor</button></a>
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
