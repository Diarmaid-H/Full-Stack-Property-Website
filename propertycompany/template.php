<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Template</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="wrapper">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<main>
Page Content goes here......
</main>
<?php include("includes/footer.html");?>
</div>
	<script>
			function myFunction() {
		  document.getElementById("myDropdown").classList.toggle("show");
		}

		window.onclick = function(e) {
		  if (!e.target.matches('.dropbtn')) {
		  var myDropdown = document.getElementById("myDropdown");
		    if (myDropdown.classList.contains('show')) {
		      myDropdown.classList.remove('show');
		    }
		  }
		}
		
		function openNav() {
		  var x = document.getElementById("toHide");
		  if (x.style.display === "none") {
		    x.style.display = "block";
		  } else {
		    x.style.display = "none";
		  }
		}
		
		function openMenu() {
			var toHide = document.getElementById("toHide");
			var openBtn = document.querySelector(".openbtn");

			if (toHide.style.display === "none" && window.innerWidth > 600) {
			toHide.style.display = "block";
			}
			else if(toHide.style.display === "block" && window.innerWidth <= 600) {
			toHide.style.display = "none";
			}
		}

		window.addEventListener('resize', openMenu);
		

	</script>	
</body>
</html>
