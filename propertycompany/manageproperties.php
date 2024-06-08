<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Properties</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
 </head>
<body>
<div id="wrappermanageprop">
	<?php include("includes/header.html");?>
	<?php include("includes/nav.html");?>
<main>
	<h1>Manage Properties</h1>
	<?php
require 'connect.php';
$sql="SELECT * from property";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0){
	echo"<div class='property-table'>";
		echo "<table>";
		echo"<tr>
			<th class='col1'>Property ID</th>
			<th class='col2'>Address</th>
			<th class='col3'>Town</th>
			<th class='col4'>County</th>
			<th class='col5'>Price</th>
			<th class='col6'>Bedrooms</th>
			<th class='col7'>Short Description</th>
			<th class='col8'>Long Description</th>
			<th class='colimage'>Image</th>
			<th class='colimage'>Image2</th>
			<th class='colimage'>Image3</th>
			<th class='colimage'>Image4</th>
			<th class='colimage'>Image5</th>
			<th class='col14'>Category ID</th>
			<th class='col15'>Vendor Email</th>
			<th class='col16'>Energy Rating</th>
			<th class='col17'>Square Metres</th>
			<th class='colbtn'>Edit</th>
			<th class='colbtn'>Delete</th>
			</tr>";

		while($row=mysqli_fetch_array($result)){
			$propertyid=$row["propertyid"];
			$address=$row["address1"];
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
			$categoryid=$row["categoryid"];
			$vendor_email=$row["vendor_email"];
			$energyrating=$row["energyrating"];
			$squaremetres=$row["squaremetres"];
			
		echo"<tr>
			<td class='col1'><b>$propertyid</b></td>
			<td class='col2'>$address</td>
			<td class='col3'>$town</td>
			<td class='col4'>$county</td>
			<td class='col5'>$price</td>
			<td class='col6'>$bedrooms</td>
			<td class='col7'>$shortdescription</td>
			<td class='col8'>$longdescription</td>
			<td class='colimage'><img src='$image'></td>
			<td class='colimage'><img src='$image2'></td>
			<td class='colimage'><img src='$image3'></td>
			<td class='colimage'><img src='$image4'></td>
			<td class='colimage'><img src='$image5'></td>
			<td class='col14'>$categoryid</td>
			<td class='col15'>$vendor_email</td>
			<td class='col16'>$energyrating</td>
			<td class='col17'>$squaremetres</td>
			<td class='table-btn-edit'><a href='editproperty.php?propertyid=$propertyid'><button>Edit</button></a></td>
			<td class='table-btn-delete'><a href='deleteproperty.php?propertyid=$propertyid'><button>Delete</button></a></td>
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
		<a href="addproperty.php"><button id="manage-prop-btn">Add a Property</button></a>
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
