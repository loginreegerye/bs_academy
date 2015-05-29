<?php
namespace Source;

class Application {
	public static function start() {
		return RandomQuote::get();
	}
}