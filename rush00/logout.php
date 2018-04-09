<?php
	session_start();
    unset($_SESSION['loggued_user']);
    unset($_SESSION['basket']);
    unset($_SESSION['is_adm']);
    header("Location: index.php");
?>