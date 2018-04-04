#!/usr/bin/env php
<?php
	if ($argc == 1)
		exit();

	$french_months = array("janvier" => 1,
		"nevrier" => 2,
		"mars" => 3,
		"avril" => 4, 
		"mai" => 5,
		"juin" => 6,
		"juillet" => 7,
		"aout" => 8,
		"septembre" => 9,
		"octobre" => 10,
		"novembre" => 11,
		"decembre" => 12);
	$pars_str = $argv[1];

	$pars_str = strtolower($pars_str);
	if (preg_match("/(lundi|mardi|mercredi|jeudi|vendredi|samedi|dimanche) ([0-9]{2}|[0-9]) (janvier|fevrier|mars|avril|mai|juin|juillet|aout|septembre|octobre|novembre|decembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $pars_str, $arg))
	{
		date_default_timezone_set("Europe/Paris");
		echo mktime($arg[5], $arg[6], $arg[7], $french_months[$arg[3]], $arg[2], $arg[4]);
	}
	else
		echo "Wrong Format";
	echo "\n";
?>
