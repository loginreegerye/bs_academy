<?php
namespace Source;

class Ingredient implements IIngredient {
	private $name;
	
	public function __construct($name) {
		$this->name = $name;
	}
	
	public function GetName() {
		return $this->name;
	}
}