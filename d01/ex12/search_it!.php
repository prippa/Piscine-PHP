<?php

if ($argc < 3) {
    exit();
}

array_shift($argv);
$search_key = array_shift($argv);
$result = null;

foreach ($argv as $item) {
    $key = strchr($item, ':', true);
    if ($key === $search_key) {
        $result = substr(strchr($item, ':'), 1);
    }
}

if ($result) {
    echo $result . PHP_EOL;
}
