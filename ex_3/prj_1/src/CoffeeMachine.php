<?php
namespace Source;

class CoffeeMachine {
	public function viewAllRecipes() {
		return Recipe::getAll();
	}
	public function addNewRecipe($name, $recipe) {
		Recipe::addRecipe($name, $recipe);
		echo 'New recipe successfully added'.PHP_EOL;
	}
	public function makeDrink($name, $recipe) {
		if($this->validateRecipe($name, $recipe)) {
			echo 'Drink successfully prepared'.PHP_EOL;
			return new Drink($name, $recipe);
		} else {
			echo 'Unknown drink recipe'.PHP_EOL;
			return false;
		}
	}
	private function validateRecipe($name, $recipe) {
		if(array_key_exists($name, Recipe::getAll())) {
			if(Recipe::getOne($name) === $recipe) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}