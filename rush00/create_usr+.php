<?php
    if ($_GET['login'] && $_GET['passwd'] && $_GET['is_adm']  && $_GET['money'] && $_GET['submit'] && $_GET['submit'] === "OK" && $_SESSION['is_adm'] == "true") {
        if (!file_exists('private')) {
            mkdir("private");
		}
		$path = 'private/passwd';
        if (!file_exists($path)) {
            file_put_contents($path, null);
        }
        $acc = unserialize(file_get_contents($path));
        if ($acc) {
            $exist = 0;
            foreach ($acc as $key => $value) {
                if ($value['login'] === $_GET['login'])
                    $exist = 1;
            }
        }
        if ($exist) {
            header("Location: my_page.php?message=error");
        } else {
            $tmp['login'] = $_GET['login'];
            $tmp['is_adm'] = $_GET['is_adm'];
            $tmp['money'] = $_GET['money'];
            $tmp['passwd'] = hash('whirlpool', $_GET['passwd']);
            $acc[] = $tmp;
            print_r($acc);
            file_put_contents($path, serialize($acc));
            header("Location: my_page.php?message=ok");
        }
    } else {
        header("Location: my_page.php?message=error");
    }
?>