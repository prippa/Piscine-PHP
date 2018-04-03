#!/usr/bin/env php
<?php
	function exitError($message) {
		echo "$message\n";
		exit();
	}

	function valid($argv, $argc) {
		if ($argc != 4)
			exitError("Incorrect Parameters");
		array_shift($argv);
		for ($i = 0; $i < count($argv); $i++)
			$argv[$i] = trim($argv[$i]);
		if (!is_numeric($argv[0]) || !is_numeric($argv[2]))
			exitError("invalid numbers");
		if (strlen($argv[1]) != 1 || ($argv[1] != '+' && $argv[1] != '-'
			&& $argv[1] != '*' && $argv[1] != '/' && $argv[1] != '%'))
			exitError("invalid operator");
		$argv[0] = intval($argv[0]);
		$argv[2] = intval($argv[2]);
		if ($argv[2] == 0 && ($argv[1] == '%' || $argv[1] == '/'))
			exitError("division by 0");
		return ($argv);
	}

	function do_op($arg) {
		if ($arg[1][0] == '+')
			return ($arg[0] + $arg[2]);
		else if ($arg[1][0] == '-')
			return ($arg[0] - $arg[2]);
		else if ($arg[1][0] == '*')
			return ($arg[0] * $arg[2]);
		else if ($arg[1][0] == '/')
			return ($arg[0] / $arg[2]);
		else if ($arg[1][0] == '%')
			return ($arg[0] % $arg[2]);
	}

	echo do_op(valid($argv, $argc)) . "\n";
?>
