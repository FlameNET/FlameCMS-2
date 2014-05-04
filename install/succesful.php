<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/FlameCMS.css">
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
</head>
<body>
	<div id="container">
	<img src="images/64x264.png"></img><h1></h1>
	
	<div id="body">
	<p>Trying to connect to database...</p>
	<?php
	// Create connection
	define('__ROOT__', dirname(dirname(__FILE__))); 
	require_once(__ROOT__.'/application/config/database.php'); 
	
	$con=mysqli_connect($db["website"]["hostname"],$db["website"]["username"],$db["website"]["password"],$db["website"]["database"]);

	// Check connection
	if (mysqli_connect_errno($con))
	  {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	  }
	?>
	Succesful!<br/><br/>
	
	Attempting to import SQL files...
	<br/><br/>
	<?php
	$mysqli = new mysqli($db["website"]["hostname"],$db["website"]["username"],$db["website"]["password"],$db["website"]["database"]);

	if (mysqli_connect_error()) {
		exit('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
	
	@$sql = file_get_contents('../sql/FlameCMS.sql');
	if (!$sql){
		exit ('Oops, something went wrong, cannot open the SQL file!');
	}

	mysqli_multi_query($mysqli,$sql);

	$mysqli->close();
	?>
	Succesful!<br/><br/>
	
	Please delete the install folder to start using FlameCMS!
	
	<p class="footer">Created by <a href="<?php echo $linkAuthor ?>"><?php echo $author ?></a></p>
	<div>
	</div>
</body>
</html>
