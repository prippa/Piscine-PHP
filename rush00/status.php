<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" charset="utf-8"/>
	<title>status</title>
</head>
<body>
	<div id="header">
		<a href="index.php" id="logo"></a>
		<div id="call">Online Shop</div>
	</div>
	<div class="op">
		<form action="status_change_usr.php" method="POST">
	        <input placeholder="Username" type="text" name="login" value="" />
	        <br />
	        <input placeholder="Change status (up/down)" type="text" name="act" value="" />
	        <br />
	        <input type="submit" name="submit" value="OK"/>
	    </form>
	</div>
	<?php
		if ($_GET['message'] == 'error') {
			echo '<script> window.alert("ERROR"); </script>';
		}
		else if ($_GET['message'] == 'ok') {
			echo '<script> window.alert("OK"); </script>';
		}
		else if ($_GET['message'] == 'no-rights') {
			echo '<script> window.alert("NO RIGHTS"); </script>';
		}
		else if ($_GET['message'] == 'fill') {
			echo '<script> window.alert("FILL ALL FILDS"); </script>';
		}
    ?>
</body>
</html>