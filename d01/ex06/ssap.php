#!/usr/bin/env php
<?php
	function ft_split($str) {
		$arr = explode(' ', $str);
		$arr = array_values(array_filter($arr));
		return ($arr);
	}

	$arr = array();

	array_shift($argv);
	for ($i = 0; $i < count($argv); $i++)
	{
		$tmp = ft_split($argv[$i]);
		for ($j = 0; $j < count($tmp); $j++)
			array_push($arr, $tmp[$j]);
	}
	sort($arr);
	for ($i = 0; $i < count($arr); $i++)
		echo "$arr[$i]\n";
?>
