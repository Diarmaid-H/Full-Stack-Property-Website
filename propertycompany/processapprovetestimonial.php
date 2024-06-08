<?php
require 'connect.php';
$id= $_GET["id"];
$sql_update="UPDATE testimonials
		   SET status ='planned'
		   WHERE id = '$id'";

if(mysqli_query($link, $sql_update))
{
header("Location: http://localhost/propertycompany/managetestimonials.php");
echo"<h3>Testimonial status updated!</h3>";
exit;
}
else
{
echo "Could not update testimonial status";
}
mysqli_close($link);
?>