<?php

function autoload($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . "/../src/$class.php";
    if(file_exists($file)) {
        require_once($file);
        return true;
    }    
}

spl_autoload_register("autoload");

class L4D2StatsTest extends PHPUnit_Framework_TestCase {

    public function testL4D2getVisibilityState() {
        $statsClient = new steamer\Stats();
        $stats = $statsClient->getStats("gutomaia", "l4d2");
        $this->assertEquals(3, $stats["visibilityState"]);
    }
}