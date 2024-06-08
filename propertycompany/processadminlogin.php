<?php
session_start();
require 'connect.php';
if(isset($_POST['admin-email']) and isset($_POST['admin-password']))
{
function validate($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$username = validate($_POST['admin-email']);
$password = validate($_POST['admin-password']);
if(empty($username))
{
	$_SESSION['errors'] = array('Username is required');
	header("Location: adminlogin.php");
	exit();
}
else if(empty($password))
{
	$_SESSION['errors'] = array('Password is required');
	header("Location: adminlogin.php");
	exit();
}
else
{

$query = "SELECT * FROM administrator WHERE admin_email='$username' and password='$password'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_num_rows($result);

if($count==1)
{
	$row=mysqli_fetch_array($result);
	$_SESSION['admin_logged_in'] = true;
	$_SESSION['username'] = $row['firstname'];
	header("Location:adminhome.php");
	exit;
}
else
{
	$_SESSION['errors'] = array("Your username or password was incorrect");
	header("Location:adminlogin.php");
}
}
}
?>




