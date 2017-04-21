<?php

include_once('IFighter.class.php');

Class NightsWatch implements IFighter{
	private $mans = array();

	public function recruit($fighter) { $this->mans[] = $fighter; }
	public function fight() {
		foreach ($this->mans as $fighter)
			if ($fighter instanceof IFighter)
				$fighter->fight();
	}
}

