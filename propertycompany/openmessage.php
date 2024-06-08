<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Open Message</title>
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
<h1>Open Message</h1>
<?php
	require 'connect.php';
	$id=$_GET["id"];
	$sql="SELECT * FROM contact WHERE id = $id";
	$result=mysqli_query($link, $sql);
	$row=mysqli_fetch_array($result);
	$id=$row["id"];
	$title=$row["title"];
	$author_name=$row["author_name"];
	$phone=$row["phone"];
	$author_email=$row["author_email"];
	$message=$row["message"];
	$created_at=$row["created_at"];	

			
		?>
	<div class="open-message">
		<div class="message-content">
			<div class="message-content-row">
				<h2>Message</h2>
				<p><b>Message ID: </b><?php echo"$id";?></p>
				<p><b>Message Title: </b><?php echo"$title";?></p>
				<p><b>Sender Name: </b><?php echo"$author_name";?></p>
				<p><b>Sender Email: </b><?php echo"$author_email";?></p>
				<p><b>Sender Phone: </b><?php echo"$phone";?></p>
				<p><b>Message: </b><?php echo"$message";?></p>
				<p><b>Created At: </b><?php echo"$created_at";?></p>
			</div>
		</div>
	</div>
	
<div class="bottom-buttons">
	<div class="bottom-buttons-row">
		<a href="adminhome.php"><button id="home-btn">Admin Home</button></a>
		<a href="managemessages.php"><button id="home-btn">Messages</button></a>
		<a href="adminlogout.php"><button id="logout-btn">Logout</button></a>
	</div>
</div>
	

<hr>
</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>
