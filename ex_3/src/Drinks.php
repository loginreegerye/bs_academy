<?php
namespace Source;

class Drinks {
	private static $drinks = ['espresso' => ['coffee', 'water']];
	public static function isDrink($name) {
		if(array_key_exists($name, self::$drinks)) {
			return true;
		} else {
			return false;
		}
	}
	public static function getDrinks() {
		return self::$drinks;
	}
}