<?php
	function is_admin($login) {
		if (!$login)
			return false;
		$acc = unserialize(file_get_contents('private/passwd'));
		if ($acc) {
			foreach ($acc as $key => $value) {
				if ($value['login'] === $login && $value['is_adm'] == "true"){
				return true;
				}
			}
		}
		return false;
	}
?>