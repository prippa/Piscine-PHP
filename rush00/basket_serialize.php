<?php
session_start();
require_once('count_price.php');

if ($_GET['submit'] && $_SESSION['loggued_user'] && $_SESSION['basket']) {
		if (!file_exists('private')) {
            mkdir("private");
		}
		$path = 'private/basket_log';
        if (!file_exists($path)) {
            file_put_contents($path, null);
        }
        $arr = unserialize(file_get_contents($path));
        $usr = unserialize(file_get_contents('private/passwd'));
        foreach ($usr as $key => $value) {
        	if ($value['login'] == $_SESSION['loggued_user']) {
        		$m_temp = $value['money'];
        		$key_temp = $key;
        		break ;
        	}
        }
        $prica_temp = count_price();
        echo $prica_temp . '\n';
        $tmp = array();
        if ($m_temp >= $prica_temp) {
        	foreach ($_SESSION['basket'] as $key => $value){
        		$tmp[] = $_SESSION['basket'][$key];
            }
            $tmp['login'] = $usr[$key_temp]['login'];
         	$arr[] = $tmp;
         	$usr[$key_temp]['money'] = $m_temp - $prica_temp;
         	file_put_contents($path, serialize($arr));
         	file_put_contents('private/passwd', serialize($usr));
         	unset($_SESSION['basket']);
            header("Location: index.php?message=buy-ok");
            exit();
         }
}
header("Location: index.php?message=no-money");
?>