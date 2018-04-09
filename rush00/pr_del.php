<?php
    session_start();
    if ($_GET['id'] && $_GET['submit'] && $_GET['submit'] === "OK"){
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
                    if ($value['id'] == $_GET['id']) {
                            unset($acc[$key]);
                            file_put_contents($path, serialize($acc));
                            header("Location: my_page.php?message=ok");
                            break;
                        }
                    }
                } else {
                    header("Location: my_page.php?message=error");
            }
        } else
            header("Location: my_page.php?message=no-righst");
    } else
        header("Location: my_page.php?message=error");
?>