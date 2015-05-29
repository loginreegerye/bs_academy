<?php
namespace Source;

class RandomQuote {
	private static $quotes =
	["A dream becomes a goal when action is taken toward its achievement",
	"Everything takes longer than you think",
	"Success is not in what you have, but who you are",
	"Lost time is never found again",
	"The time for action is now. Its never too late to do something"];
	
	public static function get() {
		return self::$quotes[rand(0, (count(self::$quotes)-1))];
	}
}