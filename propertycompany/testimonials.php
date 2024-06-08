<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Testimonials</title>
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
	<h1 id="test-h1">Testimonials</h1>
	<div class="testimonials">
	<?php
	require 'connect.php';
	$sql = "SELECT * FROM testimonials WHERE status = 'planned' ";
	$result=mysqli_query($link, $sql);

	$first = true;
	
	if(mysqli_num_rows($result)>0) {
		while($row=mysqli_fetch_array($result)){
			$content=$row["content"];
			$author_name=$row["author_name"];
			
			$displayStyle = $first ? 'block' : 'none';
		?>
		
			<div class="test-left" style="display: <?php echo $displayStyle; ?>;">

				<div class="test-left-top">
					<h2>Read through our testimonials below</h2>
				</div>
				<div class="test-left-bottom">
					<div class="test-left-bottom-quotes">
						<h1>&ldquo;</h1>
						<?php echo"<p>$content</p>"; ?>
					</div>
						<?php echo"<h4>$author_name</h4>"; ?>
						<hr>
				</div>
			</div>
<?php
	$first = false;
	}
    }
?>

			<div class="test-right">
				<div class="test-right-box">
					<div class="test-card">
					<form method="post" action="phptestprocesstestimonial.php">
						<div class="test-container">
							<h3><b>Leave a Testimonial</b></h3>
							<div class="test-box-row2">
								<div class="test-box-row2-left">
									<p>Title</p>
									<div class="test-form-title">
										<input type="text" class="input-style" id="test-title" name="test-title" required="required" placeholder=" Title">
									</div>
								</div>
								<div class="test-box-row2-right">
									<p>Email</p>
									<div class="test-form-email">
										<input type="email" class="input-style" id="test-email" name="test-email" required="required" placeholder=" Email">
									</div>
								</div>
							</div>
							<div class="test-box-row3">
								<div class="test-box-row3-left">
									<p>Name</p>
									<div class="test-form-name">
										<input type="text" class="input-style" id="test-name" name="test-name" required="required" placeholder=" Name">
									</div>
								</div>
							</div>
							<div class="test-box-row4">
								<div class="test-box-row4-left">
									<p>Content</p>
									<div class="test-form-content">
										<textarea rows="5" cols="36" class="input-style" id="test-content" name="test-content" required="required" placeholder=" Enter testimonial here"></textarea>
									</div>
								</div>
							</div>
							<div class="test-button-container">
								<button type="submit">Submit</button>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="test-arrows">
			<button class="test-arrow-left-btn" id="prev-btn"><</button>
			<button class="test-arrow-right-btn" id="next-btn">></button>
		</div>
	
	
<hr>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const testimonials = document.querySelectorAll('.test-left');
    let currentIndex = 0;

    // Show the first testimonial initially
    testimonials[currentIndex].style.display = 'block';

    const prevButton = document.getElementById('prev-btn');
    const nextButton = document.getElementById('next-btn');

    // Event listener for the previous button
    prevButton.addEventListener('click', function() {
        testimonials[currentIndex].style.display = 'none'; // Hide the current testimonial
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length; // Calculate the previous index
        testimonials[currentIndex].style.display = 'block'; // Show the previous testimonial
    });

    // Event listener for the next button
    nextButton.addEventListener('click', function() {
        testimonials[currentIndex].style.display = 'none'; // Hide the current testimonial
        currentIndex = (currentIndex + 1) % testimonials.length; // Calculate the next index
        testimonials[currentIndex].style.display = 'block'; // Show the next testimonial
    });
});
</script>

</main>
<?php include("includes/footer.html");?>
</div>
<?php include("includes/script.html");?>	
</body>
</html>
