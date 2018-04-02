#!/usr/bin/env php
<?php
	if ($argc != 2)
		exit();
	$str = $argv[1];
	$str = trim($str);
	$str = preg_replace('/ +/', ' ', $str);
	echo "$str\n";
?>
