<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/FlameCMS.css">
	<meta charset="utf-8">
	<title>Dashboard - <?php echo $title ?></title>
</head>
<body>
	<div id="container">
	<img src="images/64x264.png"></img><h1></h1>
	
	<div id="body">
	<p>Welcome to the setup of <?php echo $title ?>, we"re gonna need some information about your server:</p>
	<br/>
	<form action="" method="post" name="install" id="install">
	Database Host: <input type="text" name="hostname">
	Database Username: <input type="text" name="username">
	Database Password: <input type="password" name="password">
	Website Database:
	<p id="subtext">Create an empty database with this name</p>
	<input type="text" name="dbname">
	World Database:
	<input type="text" name="worlddb">
	Characters Database:
	<input type="text" name="chardb">
	Auth Database:
	<input type="text" name="authdb">
	<input type="submit" name="Submit" value="Install FlameCMS Now">
	</form>
	
	<p class="footer">Created by <a href="<?php echo $linkAuthor ?>"><?php echo $author ?></a></p>
	<div>
	</div>
<?php 
define('installer',true);
include('index_helper.php');
?>
</body>
</html>
