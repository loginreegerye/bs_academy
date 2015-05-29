<?php
namespace Westeros\Stormlands;

class TommenI {
	public static function whoami() {
		echo "I'm ".basename(__CLASS__)." from ".basename(__NAMESPACE__).PHP_EOL;
	}
}