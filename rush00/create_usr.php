<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") {
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
                if ($value['login'] === $_POST['login'])
                    $exist = 1;
            }
        }
        if ($exist) {
            header("Location: create.php?message=error");
        } else {
            $tmp['login'] = $_POST['login'];
            $tmp['is_adm'] = "false";
            $tmp['money'] = 0;
            $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
            $acc[] = $tmp;
            print_r($acc);
            file_put_contents($path, serialize($acc));
            header("Location: create.php?message=ok");
        }
    } else {
        header("Location: create.php?message=error");
    }
?>