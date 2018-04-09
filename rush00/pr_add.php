<?php
	session_start();
	if ($_GET['id'] && $_GET['name'] && $_GET['cat'] && $_GET['price'] && $_GET['url'] && $_GET['submit'] && $_GET['submit'] === "OK") {
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
            	$exist = 0;
            	foreach ($acc as $key => $value) {
                	if ($value['id'] === $_GET['id'])
                    	$exist = 1;
            	}
        	}
        	if ($exist == 1) {
                header("Location: my_page.php?message=error");
        	} else {
        		$tmp['id'] = $_GET['id'];
        		$tmp['name'] = $_GET['name'];
        		$tmp['cat'] = $_GET['cat'];
        		$tmp['price'] = $_GET['price'];
        		$tmp['url'] = $_GET['url'];
        		$acc[] = $tmp;
            	print_r($acc);
            	file_put_contents($path, serialize($acc));
                header("Location: my_page.php?message=ok");
        	}
		} else {
            header("Location: my_page.php?message=no-righst");
		}
	} else {
        header("Location: my_page.php?message=fill");
	}
?>