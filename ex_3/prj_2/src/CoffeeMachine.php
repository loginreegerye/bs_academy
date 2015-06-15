<?php
namespace Source;

class CoffeeMachine {
	private $drinks = [];
	private $drink;
	
	public function __construct() {
		
		$drink1 = new Drink("espresso", [new Ingredient("coffee"), new Ingredient("water")]);
		$drink2 = new Drink("doppio", [$drink1, $drink1]);
		$drink3 = new Drink("americano", [$drink1, new Ingredient("water")]);
		$drink4 = new Drink("cappuccino", [$drink1, new Ingredient("milk"), new Ingredient("whipped milk")]);
		
		$this->drinks = [$drink1, $drink2, $drink3, $drink4];
	}
	
	public function addDrink(Drink $drink) {
		$this->drinks[] = $drink;
	}
	
	public function make($name, $arrayStringIngredient) {
		if($this->validDrink($name, $arrayStringIngredient)) {
			return $this->drink;
		} else {
			throw new Exception("Not found this drink");
		}
	}
	
	private function validDrink($name, $arrayStringIngredient) {
		$result = false;
		
		foreach($this->drinks as $drink) {
			if($drink->GetName() == $name) {
				$result = true;
				for($i = 0; $i<min(count($arrayStringIngredient), count($drink->GetIngredient())); ++$i) {
					if($arrayStringIngredient[$i] != $drink->GetIngredient()[$i]->GetName()) {
						$result = false;
					}
				}
				$this->drink = $drink;
			}
		}
		return $result;
	}
}