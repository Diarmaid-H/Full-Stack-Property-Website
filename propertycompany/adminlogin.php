<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Admin Login</title>
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
if(empty($_SESSION))
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
    header('Location: adminhome.php');
    exit();
}

else if(isset($_SESSION['errors']))
{
	echo "<div class='form-errors'>";
	foreach($_SESSION['errors'] as $error)
	{
		echo "<p>";
		echo $error;
		echo "</p>";
	}
	echo "</div>";
}
unset($_SESSION['errors']);
?>

	<h1>Admin Login</h1>
	<div class="admin-login">
		<div class="admin-login-box">
			<h2>Login as Admin</h2>
			<form method="post" action="processadminlogin.php">
				<div class="admin-login-email">
					<input type="text" class="input-style" id="admin-email" name="admin-email" required="required" placeholder=" Email address">
				</div>
				<div class="admin-login-password">
					<input type="password" class="input-style" id="admin-password" name="admin-password" required="required" placeholder=" Password">
				</div>
				<div class="admin-login-button">
					<button type="submit">Submit</button>
				</div>
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
