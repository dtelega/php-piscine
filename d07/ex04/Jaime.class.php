<?php

include ("Tyrion.class.php");

class Jaime extends Lannister{
	public function sleepWith($people)
	{
		if ($people instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then.\n");
		else if ($people instanceof Tyrion)
			print("Not even if I'm drunk !\n");
		else if ($people instanceof Sansa)
			print("Let's do this.\n");
	}
}

?>