<?php
    session_start();
    if ($_POST['login'] && $_POST['submit'] && $_POST['submit'] === "OK" && $_SESSION['is_adm'] == "true"){
        if ($_SESSION['is_adm'] == "true") {
            if (!file_exists('private')) {
                mkdir("private");
		      }
		      $path = 'private/passwd';
            if (!file_exists($path)) {
                file_put_contents($path, null);
            }
            if ($_POST['login'] == 'root_1'){
                header("Location: my_page.php?message=no-righst");
                exit();
            }
            $acc = unserialize(file_get_contents($path));
            if ($acc) {
                foreach ($acc as $key => $value) {
                    if ($value['login'] === $_POST['login'] && $_POST['login'] != $_SESSION['loggued_user'] && $_POST['login'] != 'root_1') {
                            if ($_POST['act'] == 'up')
                                $acc[$key]['is_adm'] = "true";
                            if ($_POST['act'] == 'down')
                                $acc[$key]['is_adm'] = "false";
                            if ($_POST['newlogin'])
                                $acc[$key]['login'] = $_POST['newlogin'];
                            if ($_POST['money'])
                                $acc[$key]['money'] = $_POST['money'];
                            if ($_POST['passwd'])
                                $acc[$key]['passwd'] =  hash('whirlpool', $_POST['passwd']);;
                            print_r($acc);
                            file_put_contents($path, serialize($acc));
                            header("Location: my_page.php?message=ok");
                            break;
                        }
                    }
                } else {
                    header("Location: my_page.php?message=error");
            }
        } else
        header("Location: my_page.php?message=no-rights");
    } else
    header("Location: my_page.php?message=error");
?>