<?php
require 'connect.php';
$propertyid= $_GET["propertyid"];
$sql= "DELETE FROM property WHERE propertyid='$propertyid'";
if(mysqli_query($link, $sql))
{
header("Location: http://localhost/propertycompany/manageproperties.php");
echo"<h3>Property deleted successfully!</h3>";
exit;
}
else
{
echo "Could not delete property";
}
mysqli_close($link);
?>