<?php

class TF2StatsTest extends PHPUnit_Framework_TestCase {

    function setUp(){
        $statsClient = new steamer\Stats();
        $this->stats = $statsClient->getStats("gutomaia", "tf2");
    }

    function tearDown(){
        $this->stats = null;
    }

    public function testL4D2getVisibilityState() {
        $this->assertEquals(3, $this->stats["visibilityState"]);
    }

    public function testL4D2getGameFriendlyName(){
        $this->assertEquals('TF2', $this->stats["gameFriendlyName"]);
    }
}