<?php

Class Color {
	public $red;
	public $green;
	public $blue;

	public static $verbose = False;

	public function __construct(array $kwargs)
	{
		if (isset($kwargs['red']) && isset($kwargs['green']) && isset($kwargs['blue']))
		{
			$this->red = intval($kwargs['red'], 10);
			$this->green = intval($kwargs['green'], 10);
			$this->blue = intval($kwargs['blue'], 10);
		}
		else if (isset($kwargs['rgb']))
		{
			$this->red = $kwargs['rgb'] >> 16;
			$this->green = ($kwargs['rgb'] >> 8) & 0xff;
			$this->blue = $kwargs['rgb'] & 0xff;
		}
		else
		{
			print("error");
			exit(1);
		}
		if (Color::$verbose == true)
			print($this." constructed." . PHP_EOL);
		return;
	}

	public function __destruct()
	{
		if (Color::$verbose == True)
			print($this." destructed." . PHP_EOL);
	}

	public static function doc()
	{
		return (file_get_contents("./Color.doc.txt"));
	}

	public function __toString()
	{
		return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
	}

	public function add($added)
	{
		return (new Color(array('red' => $this->red + $added->red,
								'green' => $this->green + $added->green,
								'blue' => $this->blue + $added->blue)));
	}

	public function sub($subs)
	{
		return (new Color(array('red' => $this->red - $subs->red,
								'green' => $this->green - $subs->green,
								'blue' => $this->blue - $subs->blue)));
	}

	public function mult($m)
	{
		return (new Color(array('red' => $this->red * $m->red,
								'green' => $this->green * $m->green,
								'blue' => $this->blue * $m)));
	}

}

?>