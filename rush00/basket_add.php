<?php
	session_start();
	require_once('goods_find.php');
	$flag = 0;
if ($_GET['id']) {
		foreach ($_SESSION['basket'] as $key => $value) {
			if ($value['id'] == $_GET['id']) {
				$flag = 1;
				$_SESSION['basket'][$key]['quantity'] += 1;
				print_r($_SESSION['basket']);
	 		 }
		}
		if ($flag == 0) {
			$tmp = serch_by_id($_GET['id']);
			$tmp['quantity'] = 1;
			$_SESSION['basket'][] = $tmp;
			print_r($_SESSION['basket']);
		}
}
?>