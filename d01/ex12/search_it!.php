<?php

if ($argc < 2) {
    exit();
}

$result = null;
$i = 2;

while (isset($argv[$i])) {
    $key = strchr($argv[$i], ':', true);
    if ($key === $argv[1]) {
        $result = substr(strchr($argv[$i], ':'), 1);
    }
    ++$i;
}

if ($result) {
    echo $result . PHP_EOL;
}
