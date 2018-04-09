<?php
	session_start();
	require_once('goods_find.php');
	$flag = 0;
if ($_GET['id']) {
		foreach ($_SESSION['basket'] as $key => $value) {
			if ($value['id'] == $_GET['id']) {
				$flag = 1;
				$_SESSION['basket'][$key]['quantity'] += 1;
	 		 }
		}
		if ($flag == 0) {
			$tmp = serch_by_id($_GET['id']);
			$tmp['quantity'] = 1;
			$_SESSION['basket'][] = $tmp;
		}
}
header("Location: basket.php");
?>