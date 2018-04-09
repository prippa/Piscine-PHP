<?php
	session_start();
	require_once('goods_find.php');
	$flag = 0;
if ($_GET['id']) {
	foreach ($_SESSION['basket'] as $key => $value) {
		if ($value['id'] == $_GET['id']) {
			$flag = 1;
			$_SESSION['basket'][$key]['quantity'] -= 1;
			if ($_SESSION['basket'][$key]['quantity'] == 0){
				unset($_SESSION['basket'][$key]);
	 		}
		}
	}
}
header("Location: basket.php");
?>