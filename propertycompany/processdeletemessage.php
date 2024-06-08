<?php
require 'connect.php';
$id= $_GET["id"];
$sql= "DELETE FROM contact WHERE id='$id'";
if(mysqli_query($link, $sql))
{
header("Location: http://localhost/propertycompany/managemessages.php");
echo"<h3>Message deleted successfully!</h3>";
exit;
}
else
{
echo "Could not delete message";
}
mysqli_close($link);
?>