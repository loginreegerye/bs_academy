<?php
namespace Westeros\Crownlands;

class TommenBaratheon {
	public static function whoami() {
		echo "I'm ".basename(__CLASS__)." from ".basename(__NAMESPACE__).PHP_EOL;
	}
}