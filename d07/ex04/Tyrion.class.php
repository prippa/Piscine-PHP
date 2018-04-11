<?php
	class Tyrion extends Lannister
	{
		public function with($obj_class) {
			if (get_class($obj_class) == "Sansa")
				return ("Let's do this.");
			else
				return ("Not even if I'm drunk !");
		}
	}
?>
