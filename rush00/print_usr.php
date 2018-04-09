<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" charset="utf-8"/>
	<title>All Users</title>
</head>
<body>
	<div id="header">
        <a href="index.php" id="logo"></a>      
        <div id="call">Online Shop</div>
    </div>
    <h2>All Users</h2>
    <div class="op">
	    <?php
	        session_start();
	     if ($_SESSION['is_adm'] == 'true') {
			$arr = unserialize(file_get_contents("private/passwd"));
			foreach ($arr as $key => $value) {
				if ($value['is_adm'] == "true") {
					echo '<p class="user-text" style="font-size: 30px;">' . $value['login'] . " ". "(admin)" . '</p>';
				}
				else {
					echo '<p class="user-text" style="font-size: 30px;">' . $value['login'] . " ". "(user)" . '</p>';
				}
			}
		}
	    ?>
	</div>
</body>
</html>