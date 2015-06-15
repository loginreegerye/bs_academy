<?php
namespace Source;

class Recipe {

	//$recipes['mocha'] = ['chocolate', 'espresso', 'milk', 'whipped cream'];
	//$recipes['irish'] = ['espresso', 'espresso', 'whisky', 'whipped cream'];

	private static $recipes =
	
	[	'espresso' => ['coffee', 'water'],
		'doppio' => ['espresso', 'espresso'],
		'americano' => ['espresso', 'water'],
		'cappuccino' => ['espresso', 'milk', 'whipped milk']
	];
	
	public static function getAll() {
		return self::$recipes;
	}

	public static function getOne($name) {
		return self::$recipes[$name];
	}

	public static function addRecipe($name, $ingredients) {
		self::$recipes[$name] = $ingredients;
	}
}