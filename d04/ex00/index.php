<?php

session_start();
if ($_GET["submit"] === "OK"){
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];
}

?>

<html><body>
<form name="Authentication" method="get">
	Username: <input name="login" type="text" value="<?php echo $_SESSION["login"]?>" />
	<br />
	Password: <input name="passwd" type="password" value="<?php echo $_SESSION["passwd"]?>" />
	<input type="submit" name="submit" value="<?php echo $_GET["submit"]?>"/>
</form>
</body></html><?php echo "\n"; ?>