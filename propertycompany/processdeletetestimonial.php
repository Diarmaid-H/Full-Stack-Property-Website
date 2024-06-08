<?php
require 'connect.php';
$id= $_GET["id"];
$sql= "DELETE FROM testimonials WHERE id='$id'";
if(mysqli_query($link, $sql))
{
header("Location: http://localhost/propertycompany/managetestimonials.php");
echo"<h3>Testimonial deleted successfully!</h3>";
exit;
}
else
{
echo "Could not delete testimonial";
}
mysqli_close($link);
?>