<?php
	function serch_by_id($idd) {
		if (!$idd)
			exit();
		$acc = unserialize(file_get_contents('private/goods'));
		if ($acc) {
			foreach ($acc as $key => $value) {
				if ($value['id'] == $idd) {
					$tmp = $acc[$key];
					return $tmp;
				}
			}
		}
	}
?>