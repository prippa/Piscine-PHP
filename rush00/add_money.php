<?php
session_start();
if ($_POST['amm'] && $_POST['submit'] && $_POST['submit'] === 'OK') {
	$path = 'private/passwd';
	$arr = unserialize(file_get_contents($path));
	foreach ($arr as $key => $value) {
		if ($value['login'] == $_SESSION['loggued_user']){
			$tmp = $arr[$key]['money'];
			$tmp += $_POST['amm'];
			$arr[$key]['money'] = $tmp;
			echo $arr[$key]['money'] . '\n';
			file_put_contents($path, serialize($arr));
			header("Location: my_page.php?message=ok");
			exit();
		}
	}
	header("Location: my_page.php?message=error");
	exit();
}
header("Location: my_page.php?message=error");
exit();
?>