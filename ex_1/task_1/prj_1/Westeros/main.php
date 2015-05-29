<?php
namespace Westeros\Crowlands {
	class TommenBaratheon {
		public static function whoami() {
			echo "I'm ".basename(__CLASS__)." from ".basename(__NAMESPACE__).PHP_EOL;
		}
	}
	TommenBaratheon::whoami();
}

namespace Westeros\Riverlands {
	class PetyrBaelish {
		public static function whoami() {
			echo "I'm ".basename(__CLASS__)." from ".basename(__NAMESPACE__).PHP_EOL; 
		}
	}
	PetyrBaelish::whoami();
}

namespace Westeros\Stormlands {
	class TommenI {
		public static function whoami () {
			echo "I'm ".basename(__CLASS__)." from ".basename(__NAMESPACE__).PHP_EOL;
		}
	}
	TommenI::whoami();
}

namespace Westeros\Dorne {
	class DoranMartell {
		public static function whoami () {
			echo "I'm ".basename(__CLASS__)." from ".basename(__NAMESPACE__).PHP_EOL;
		}
	}
	DoranMartell::whoami();
}

namespace Westeros\Westerlands {
	class CerseiLannister {
		public static function whoami () {
			echo "I'm ".basename(__CLASS__)." from ".basename(__NAMESPACE__).PHP_EOL;
		}
	}
	CerseiLannister::whoami();
}