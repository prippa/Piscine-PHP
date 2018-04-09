<?php
	session_start();
	function count_price(){
		$tmp = 0;
		foreach ($_SESSION['basket'] as $key => $value) {
				$tmp += $_SESSION['basket'][$key]['quantity'] * $_SESSION['basket'][$key]['price'];
		}
		return $tmp;
	}
?>