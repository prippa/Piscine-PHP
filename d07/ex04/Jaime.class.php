<?php
	class Jaime extends Lannister
	{
		public function with($obj_class) {
			if (get_class($obj_class) == "Sansa")
				return ("Let's do this.");
			else if (get_class($obj_class) == "Cersei")
				return ("With pleasure, but only in a tower in Winterfell, then.");
			else
				return ("Not even if I'm drunk !");
		}
	}
?>
