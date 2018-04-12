<?php
	abstract class Fighter
	{
		private $type;
		abstract public function fight($target);

		function __construct($type) {
			$this->type = $type;
		}

		public function getType() {
			return ($this->type);
		}
	}
?>
