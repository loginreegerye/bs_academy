<?php
namespace Source;

class Drink implements IIngredient {
	public $name;
	public $ingredients = [];
	
	public function __construct($name, $ingredients) {
		$this->name = $name;
		$this->ingredients = $ingredients;
	}
	
	public function GetIngredient() {
		return $this->ingredients;
	}
	
	public function GetName() {
		return $this->name;
	}
}