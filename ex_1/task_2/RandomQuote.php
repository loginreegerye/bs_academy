<?php
trait RandomQuote {
	private static $quotes =
	["A dream becomes a goal when action is taken toward its achievement",
	"Everything takes longer than you think",
	"Success is not in what you have, but who you are",
	"Lost time is never found again",
	"The time for action is now. Its never too late to do something"];
	
	public static function getRandQuote() {
		return self::$quotes[rand(0, (count(self::$quotes)-1))];
	}
}

class Greeting {
	use RandomQuote;
	public static function say($name) {
		echo "Hi, ".$name."! ".PHP_EOL;
		echo self::getRandQuote();
	}
}

Greeting::say("test");