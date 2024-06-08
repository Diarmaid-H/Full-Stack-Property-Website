<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Messages</title>
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
	<h1>Manage Messages</h1>
	<?php
require 'connect.php';
$sql="SELECT * from contact";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0){
	echo"<div class='messages-table'>";
		echo "<table>";
		echo"<tr>
			<th class='m-col1'>ID</th>
			<th class='m-col2'>Title</th>
			<th class='m-col3'>Name</th>
			<th class='m-col4'>Phone</th>
			<th class='m-col5'>Email</th>
			<th class='m-col6'>Message Content</th>
			<th class='m-col7'>Created At</th>
			<th class='m-colbtn'>Open</th>
			<th class='m-colbtn'>Delete</th>
			</tr>";

		while($row=mysqli_fetch_array($result)){
			$id=$row["id"];
			$title=$row["title"];
			$author_name=$row["author_name"];
			$phone=$row["phone"];
			$author_email=$row["author_email"];
			$message=$row["message"];
			$created_at=$row["created_at"];
			

		echo"<tr>
			<td class='m-col1'><b>$id</b></td>
			<td class='m-col2'>$title</td>
			<td class='m-col3'>$author_name</td>
			<td class='m-col4'>$phone</td>
			<td class='m-col5'>$author_email</td>
			<td class='m-col6'>$message</td>
			<td class='m-col7'>$created_at</td>
			<td class='m-table-btn-edit'><a href='openmessage.php?id=$id'><button>Open</button></td>
			<td class='m-table-btn-delete'><a href='deletemessage.php?id=$id'><button>Delete</button></td>
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
