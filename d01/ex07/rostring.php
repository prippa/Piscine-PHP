#!/usr/bin/env php
<?php
	function ft_split($str) {
		$arr = explode(' ', $str);
		$arr = array_values(array_filter($arr));
		return ($arr);
	}

	if ($argc == 1)
		exit();
	$arr = ft_split($argv[1]);
	for ($i = 1; $i < count($arr); $i++)
		echo "$arr[$i] ";
	echo "$arr[0]\n";
?>
