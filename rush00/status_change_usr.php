<?php
    session_start();
    if ($_POST['login'] && $_POST['act'] && $_POST['submit'] && $_POST['submit'] === "OK"){
        if ($_SESSION['is_adm'] == "true") {
            if (!file_exists('private')) {
                mkdir("private");
		      }
		      $path = 'private/passwd';
            if (!file_exists($path)) {
                file_put_contents($path, null);
            }
            $acc = unserialize(file_get_contents($path));
            if ($acc) {
                foreach ($acc as $key => $value) {
                    if ($value['login'] === $_POST['login'] && $_POST['login'] != $_SESSION['loggued_user']) {
                            if ($_POST['act'] == 'up')
                                $acc[$key]['is_adm'] = "true";
                            if ($_POST['act'] == 'down')
                                $acc[$key]['is_adm'] = "false";
                            print_r($acc);
                            file_put_contents($path, serialize($acc));
                            echo "OK\n";
                            break;
                        }
                    }
                } else {
                    echo "ERROfffR\n";
            }
        } else
            echo "no rights\n";
    } else
        echo "ERkkkkkROR\n";
?>