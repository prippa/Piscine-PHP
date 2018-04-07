<?php
	session_start();
	if ($_GET['id'] && $_GET['submit'] && $_GET['submit'] === "OK") {
		if ($_SESSION['is_adm'] == "true") {
			if (!file_exists('private')) {
            	mkdir("private");
			}
			$path = 'private/goods';
        	if (!file_exists($path)) {
            	file_put_contents($path, null);
        	}
        	$acc = unserialize(file_get_contents($path));
        	if ($acc) {
            	foreach ($acc as $key => $value) {
                	if ($value['id'] === $_GET['id']) {
                		if (isset($_GET['name']) === true)
        					$acc[$key]['name'] = $_GET['name'];
        				if (isset($_GET['cat']) === true)
        					$acc[$key]['cat'] = $_GET['cat'];
        				if (isset($_GET['price']) === true)
        					$acc[$key]['price'] = $_GET['price'];
        				if (isset($_GET['url']) === true)
        					$acc[$key]['url'] = $_GET['url'];
            			print_r($acc);
            			file_put_contents($path, serialize($acc));
            			echo "OK\n";
            			break ;
                	}
            	}
        	}

        } else
			echo "no rights(\n";
	} else
		echo "Fill all filds(\n";
?>