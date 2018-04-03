#!/usr/bin/env php
<?php
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

	function getCharPriority($c) {
		if (ctype_alpha($c))
			$priority = 1;
		else if (ctype_digit($c))
			$priority = 2;
		else
			$priority = 3;
		return ($priority);
	}

	function extrimSort($a, $b) {
		if ($a == $b)
			return (0);
		$a = strtolower($a);
		$b = strtolower($b);
		while ($i < strlen($a) && $i < strlen($b))
		{
			$pri_a = getCharPriority($a[$i]);
			$pri_b = getCharPriority($b[$i]);
			if ($pri_a == $pri_b)
				$res = strcmp($a[$i], $b[$i]);
			else
				$res = $pri_a - $pri_b;
			if ($res > 0)
				return (1);
			else if ($res < 0)
				return (-1);
			$i++;
		}
		return (strcmp($a, $b));
	}

	array_shift($argv);
	$arr = ft_ssap($argv);
	usort($arr, "extrimSort");
	for ($i = 0; $i < count($arr); $i++)
		echo "$arr[$i]\n";
?>
