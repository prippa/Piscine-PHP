<?php
    require_once('auth.php');
    require_once('is_admin.php');
    session_start();
    if (auth($_POST['login'], $_POST['passwd'])){
        $_SESSION['loggued_user'] = $_POST['login'];
         if (is_admin($_POST['login'])){
         	$_SESSION['is_adm'] = "true";
         	echo "true\n";
         	echo $_SESSION['is_adm'];
         }
         else
         	$_SESSION['is_adm'] = "false";
        echo "OK\n";
    } else {
        $_SESSION['loggued_user'] = "";
        $_SESSION['is_adm'] = "";
        echo "ERROR\n";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>42chat</title>
</head>
<body>
	<a href="my_page.html">Back to start!</a>
</body>
</html>