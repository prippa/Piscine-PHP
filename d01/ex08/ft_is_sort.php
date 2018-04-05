<?php
	function ft_is_sort($array) {
		$tmp = $array;
		sort($tmp);
		return ($tmp == $array);
	}
?>
