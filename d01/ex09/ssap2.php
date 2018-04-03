#!/usr/bin/env php
<?php
	// function cmp($left, $right) {
	// 	$i = 0;

	// 	while ($i < strlen($left) && $i < strlen($right))
	// 	{
			
	// 	}
	// }

	// function extrim_sort($array) {
	// 	for ($i = 0; $i < count($array); $i++)
	// 	{
	// 		for ($j = 0; $j < count($array) - 1; $j++)
	// 		{
	// 			if (cmp($array[$j], $array[$j + 1]))
	// 			{
	// 				$tmp = $array[$j];
	// 				$array[$j] = $array[$j + 1];
	// 				$array[$j + 1] = $tmp;
	// 			}
	// 		}
	// 	}
	// 	return ($array);
	// }

	function ft_split($str) {
		$arr = explode(' ', $str);
		$arr = array_values(array_filter($arr));
		return ($arr);
	}

	function ft_ssap($array) {
		$arr = array();
		for ($i = 0; $i < count($array); $i++)
		{
			$tmp = ft_split($array[$i]);
			for ($j = 0; $j < count($tmp); $j++)
				array_push($arr, $tmp[$j]);
		}
		return ($arr);
	}

	function ccmp($c1, $c2) {
		$c1 = strtolower($c1);
		$c2 = strtolower($c2);
		if (ctype_alpha($c1))
			$g1 = 1;
		else if (ctype_digit($c1))
			$g1 = 2;
		else
			$g1 = 3;
		if (ctype_alpha($c2))
			$g2 = 1;
		else if (ctype_digit($c2))
			$g2 = 2;
		else
			$g2 = 3;
		if ($g1 != $g2)
			return ($g1 - $g2);
		return (strcmp($c1, $c2));
	}

	function cmp($str1, $str2) {
		while ($j < strlen($str1) && $j < strlen($str2))
		{
			if (ccmp($str1[$j], $str2[$j]) > 0)
				return (1);
			if (ccmp($str1[$j], $str2[$j]) < 0)
				return (-1);
			$j++;
		}
		if ($j < strlen(str1))
			return (1);
		if ($j < strlen(str2))
			return (-1);
		return (0);
	}

	array_shift($argv);
	$arr = ft_ssap($argv);
	usort($arr, "cmp");
	for ($i = 0; $i < count($arr); $i++)
		echo "$arr[$i]\n";
?>
