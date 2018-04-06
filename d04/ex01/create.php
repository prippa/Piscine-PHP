<?php
	if (!$_POST["login"] || !$_POST["passwd"] || $_POST["submit"] != "OK") {
		echo "ERROR\n";
		exit();
	}
	if (!file_exists("../private")) {
		mkdir("../private");
	}
	else if (file_exists("../private/passwd")) {
		$data = unserialize(file_get_contents("../private/passwd"));
		foreach ($data as $key => $v) {
			if ($v["login"] == $_POST["login"]) {
				echo "ERROR\n";
				exit();
			}
		}
	}
	$data[] = array("login" => $_POST["login"], "passwd" => hash("md5", $_POST["passwd"]));
	file_put_contents("../private/passwd", serialize($data));
	echo "OK\n";
?>
