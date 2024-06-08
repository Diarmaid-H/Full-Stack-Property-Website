<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Contact Us</title>
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

	<h1>Contact Us</h1>
	<div class="contact-page">
		<div class="contact-left">
			<div class="contact-left-top">
				<h2>Ready to find your dream property? Contact us today and let's make it happen!</h2>
			</div>
			<div class="contact-left-bottom">
				<div class="contact-left-row1">
					<div class="contact-left-row1-icon">
						<button class="contact-left-row1-icon-btn">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</button>
					</div>
					<div class="contact-left-row1-text">
						<p>Call:</p>
						<p>+91 9876543210</p>
					</div>
				</div>
				<div class="contact-left-row2">
					<div class="contact-left-row2-icon">
						<button class="contact-left-row2-icon-btn">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</button>
					</div>
					<div class="contact-left-row2-text">
						<p>Email:</p>
						<p>info@example.com</p>
					</div>
				</div>
				<div class="contact-left-row3">
					<div class="contact-left-row3-icon">
						<button class="contact-left-row3-icon-btn">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</button>
					</div>
					<div class="contact-left-row3-text">
						<p>Address:</p>
						<p>1 Shop Street, Galway City, Galway</p>
					</div>
				</div>
				
			</div>
		</div>
		<div class="contact-right">
			<div class="contact-right-box">
			<form method="post" action="phptestprocesscontact.php">
				<div class="contact-card">
					<div class="contact-container">
						<div class="contact-row">
							<p>Title</p>
							<div class="contact-form-title">
								<input type="text" class="input-style" id="contact-title" name="contact-title" required="required" placeholder=" Title">
							</div>
						</div>
						<div class="contact-row1">
							<p>Name</p>
							<div class="contact-form-name">
								<input type="text" class="input-style" id="contact-name" name="contact-name" required="required" placeholder=" Name">
							</div>
						</div>
						<div class="contact-row2">
							<p>Phone</p>
							<div class="contact-form-phone">
								<input type="tel" class="input-style" id="contact-phone" name="contact-phone" required="required" placeholder=" Phone Number">
							</div>
						</div>
						<div class="contact-row3">
							<p>Email</p>
							<div class="contact-form-email">
								<input type="email" class="input-style" id="contact-email" name="contact-email" required="required" placeholder=" Email">
							</div>
						</div>
						<div class="contact-row4">
							<p>Message</p>
							<div class="contact-form-email">
								<textarea rows="6" cols="38" class="input-style" id="contact-message" name="contact-message" required="required" placeholder=" Enter your message here..."></textarea>
							</div>
						</div>
						<div class="contact-button-container">
							<button type="submit">Submit</button>
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
	
	
	
<hr>
</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>
