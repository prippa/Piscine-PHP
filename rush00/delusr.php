<?php
    session_start();
    if ($_POST['login'] && $_POST['submit'] && $_POST['submit'] === "OK"){
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
                            unset($acc[$key]);
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