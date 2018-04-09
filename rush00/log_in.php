<?php
    require_once('auth.php');
    require_once('is_admin.php');
    session_start();
    if (auth($_POST['login'], $_POST['passwd'])){
        $_SESSION['loggued_user'] = $_POST['login'];
         if (is_admin($_POST['login'])){
         	$_SESSION['is_adm'] = "true";
         	echo $_SESSION['is_adm'];
         }
         else
         	$_SESSION['is_adm'] = "false";
         header("Location: login.php?message=ok");
    } else {
        $_SESSION['loggued_user'] = "";
        $_SESSION['is_adm'] = "";
        header("Location: login.php?message=error");
    }
?>