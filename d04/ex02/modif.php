<?php
	if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"] || $_POST["submit"] != OK || !file_exists("../private/passwd")) {
		echo "ERROR\n";
		exit();
	}
	$data = unserialize(file_get_contents("../private/passwd"));
	foreach ($data as $key => $v) {
		if ($_POST["login"] == $v["login"]) {
			if (hash("md5", $_POST["oldpw"]) == $v["passwd"]) {
				$data[$key]["passwd"] = hash("md5", $_POST["newpw"]);
				file_put_contents("../private/passwd", serialize($data));
				echo "OK\n";
			}
			else {
				echo "ERROR\n";
			}
			exit();
		}
	}
	echo "ERROR\n";
?>
