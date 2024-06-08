<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Process Testimonial</title>
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

	<h1>Testimonials</h1>
<?php

require 'connect.php';
							
	$title=mysqli_real_escape_string($link, $_POST['test-title']);
	$content=mysqli_real_escape_string($link, $_POST['test-content']);
	$author_name=mysqli_real_escape_string($link, $_POST['test-name']);
	$author_email=mysqli_real_escape_string($link, $_POST['test-email']);
	$sql_insert="INSERT INTO testimonials(title, content, author_name, author_email) VALUES ('$title', '$content', '$author_name', '$author_email')";

if(mysqli_query($link, $sql_insert)){
echo"<div class='confirmation-page'>";
		echo"<div class='confirmation-box'>";
			echo"<h2>Thank you for leaving us a testimonial!</h2>";
			echo"<a href='index.php'><button>Home Page</button></a>";
		echo"</div>";
	echo"</div>";
}

else{
	echo "An error occured, try again!";
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