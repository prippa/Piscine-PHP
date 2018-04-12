<?php
	class UnholyFactory
	{
		private $_fighters = array();

		public function absorb($obj_class) {
			$name = get_class($obj_class);
			if (get_parent_class($name) != "Fighter")
				echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
			else if (!in_array($obj_class, $this->_fighters)) {
				$key = $obj_class->getType();
				echo "(Factory absorbed a fighter of type " . $key . ")" . PHP_EOL;
				$this->_fighters[$key] = $obj_class;
			}
			else
				echo "(Factory already absorbed a fighter of type " . $obj_class->getType() . ")" . PHP_EOL;
		}

		public function fabricate($obj_class) {
			if (isset($this->_fighters[$obj_class])) {
				$new = $this->_fighters[$obj_class];
				echo "(Factory fabricates a fighter of type " . $new->getType() . ")" . PHP_EOL;
				return ($new);
			}
			else
				echo "(Factory hasn't absorbed any fighter of type " . $obj_class . ")" . PHP_EOL;
		}
	}
?>
