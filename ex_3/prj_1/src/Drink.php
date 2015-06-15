<?php
namespace Source;

class Drink {
	private $name;
	private $recipe;
	private $ingredients;

	public function __construct($name, $recipe) {
		$this->name = $name;
		$this->recipe = $recipe;
		
		$temp = [];

		foreach ($recipe as $value) {
			if(Ingredients::isIngredient($value)) {
				$temp[] = $value;
			}
			if(Drinks::isDrink($value)) {
				$drinks = Drinks::getDrinks();
				foreach($drinks[$value] as $ingredient) {
					$temp[] = $ingredient;
				}
			}
		}

		$this->ingredients = $temp;
	}
}