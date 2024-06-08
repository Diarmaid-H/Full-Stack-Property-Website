<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Testimonials</title>
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
	<h1>Manage Testimonials</h1>
	<?php
require 'connect.php';
$sql="SELECT * from testimonials";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0){
	echo"<div class='testimonials-table'>";
		echo "<table>";
		echo"<tr>
			<th class='t-col1'>ID</th>
			<th class='t-col2'>Title</th>
			<th class='t-col3'>Content</th>
			<th class='t-col4'>Name</th>
			<th class='t-col5'>Email</th>
			<th class='t-col6'>Created At</th>
			<th class='t-col7'>Status</th>
			<th class='t-colbtn'>Approve</th>
			<th class='t-colbtn'>Delete</th>
			</tr>";

		while($row=mysqli_fetch_array($result)){
			$id=$row["id"];
			$title=$row["title"];
			$content=$row["content"];
			$author_name=$row["author_name"];
			$author_email=$row["author_email"];
			$created_at=$row["created_at"];
			$status=$row["status"];

		echo"<tr>
			<td class='t-col1'><b>$id</b></td>
			<td class='t-col2'>$title</td>
			<td class='t-col3'>$content</td>
			<td class='t-col4'>$author_name</td>
			<td class='t-col5'>$author_email</td>
			<td class='t-col6'>$created_at</td>
			<td class='t-col7'>$status</td>";
			echo"<td class='t-table-btn-edit'>";
				if($status=='pending'){
					echo"<a href='processapprovetestimonial.php?id=$id'><button>Approve</button></td>";
				}
				else{
					echo"<p>Approved</p>";
				}
			echo"	
			<td class='t-table-btn-delete'><a href='deletetestimonial.php?id=$id'><button>Delete</button></td>
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
