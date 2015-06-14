<?php
namespace Source;

class Ingredients {
	private static $ingredients =
	['coffee', 'water', 'milk',
	'whipped milk', 'sugar', 'whipped cream',
	'whiskey', 'chocolate'];
	public static function isIngredient($name) {
		if(in_array($name, self::$ingredients)) {
			return true;
		} else {
			return false;
		}
	}
	public static function getIngredients() {
		return self::$ingredients;
	}
}