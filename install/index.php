<?php
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
	if (isset($_POST["Submit"])) {
		$string = '<?php

$active_group = "website";
$active_record = TRUE;
/**
 * DataBase CMS
 */
$db["website"]["hostname"] = "'. $_POST["hostname"]. '";
$db["website"]["username"] = "'. $_POST["username"]. '";
$db["website"]["password"] = "'. $_POST["password"]. '";
$db["website"]["database"] = "'. $_POST["dbname"]. '";
$db["website"]["dbdriver"] = "mysql";
$db["website"]["dbprefix"] = "";
$db["website"]["pconnect"] = TRUE;
$db["website"]["db_debug"] = TRUE;
$db["website"]["cache_on"] = FALSE;
$db["website"]["cachedir"] = "";
$db["website"]["char_set"] = "utf8";
$db["website"]["dbcollat"] = "utf8_general_ci";
$db["website"]["swap_pre"] = "";
$db["website"]["autoinit"] = TRUE;
$db["website"]["stricton"] = FALSE;

/**
 * DataBase Auth
 */
$db["auth"]["hostname"] = "'. $_POST["hostname"]. '";
$db["auth"]["username"] = "'. $_POST["username"]. '";
$db["auth"]["password"] = "'. $_POST["password"]. '";
$db["auth"]["database"] = "'. $_POST["authdb"]. '";
$db["auth"]["dbdriver"] = "mysql";
$db["auth"]["dbprefix"] = "";
$db["auth"]["pconnect"] = TRUE;
$db["auth"]["db_debug"] = TRUE;
$db["auth"]["cache_on"] = FALSE;
$db["auth"]["cachedir"] = "";
$db["auth"]["char_set"] = "utf8";
$db["auth"]["dbcollat"] = "utf8_general_ci";
$db["auth"]["swap_pre"] = "";
$db["auth"]["autoinit"] = TRUE;
$db["auth"]["stricton"] = FALSE;

/**
 * DataBase Characters
 */
$db["website"]["hostname"] = "'. $_POST["hostname"]. '";
$db["website"]["username"] = "'. $_POST["username"]. '";
$db["website"]["password"] = "'. $_POST["password"]. '";
$db["characters"]["database"] = "'. $_POST["chardb"]. '";
$db["characters"]["dbdriver"] = "mysql";
$db["characters"]["dbprefix"] = "";
$db["characters"]["pconnect"] = TRUE;
$db["characters"]["db_debug"] = TRUE;
$db["characters"]["cache_on"] = FALSE;
$db["characters"]["cachedir"] = "";
$db["characters"]["char_set"] = "utf8";
$db["characters"]["dbcollat"] = "utf8_general_ci";
$db["characters"]["swap_pre"] = "";
$db["characters"]["autoinit"] = TRUE;
$db["characters"]["stricton"] = FALSE;

/**
 * DataBase Word
 */
$db["world"]["hostname"] = "'. $_POST["hostname"]. '";
$db["world"]["username"] = "'. $_POST["username"]. '";
$db["world"]["password"] = "'. $_POST["password"]. '";
$db["world"]["database"] = "'. $_POST["worlddb"]. '";
$db["world"]["dbdriver"] = "mysql";
$db["world"]["dbprefix"] = "";
$db["world"]["pconnect"] = TRUE;
$db["world"]["db_debug"] = TRUE;
$db["world"]["cache_on"] = FALSE;
$db["world"]["cachedir"] = "";
$db["world"]["char_set"] = "utf8";
$db["world"]["dbcollat"] = "utf8_general_ci";
$db["world"]["swap_pre"] = "";
$db["world"]["autoinit"] = TRUE;
$db["world"]["stricton"] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */
';
		$fp = fopen("../application/config/database.php", "w");
		fwrite($fp, $string);
		fclose($fp);
		header("Location: succesful.php");
	}?>
</body>
</html>
