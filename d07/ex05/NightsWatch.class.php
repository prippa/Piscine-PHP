<?php
	class NightsWatch implements IFighter
	{
		private $arr;

		public function recruit($obj_class) {
			if ($obj_class instanceof IFighter)
				$this->$arr[] = $obj_class;
		}

		public function fight() {
			foreach ($this->$arr as $value)
				$value->fight();
		}
	}
?>
