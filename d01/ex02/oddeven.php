#!/usr/bin/env php
<?php
	echo "Enter a number: ";
	while ($line = fgets(STDIN))
	{
		$line = rtrim($line);
		if (is_numeric($line))
		{
			$line = intval($line);
			echo "The number $line " . (($line % 2) == 0 ? "is even" : "is odd") . "\n";
		}
		else
			echo "'$line' is not a number\n";
		echo "Enter a number: ";
	}
	echo "\n";
?>
