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

    function setUp(){
        $statsClient = new steamer\Stats();
        $this->stats = $statsClient->getStats("gutomaia", "l4d2");
    }

    function tearDown(){
        $this->stats = null;
    }

    public function testL4D2getVisibilityState() {
        $this->assertEquals(3, $this->stats["visibilityState"]);
    }

    public function testL4D2getGameFriendlyName(){
        $this->assertEquals("L4D2", $this->stats["gameFriendlyName"]);
    }
}