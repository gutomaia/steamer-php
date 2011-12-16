<?php

class TF2StatsTest extends PHPUnit_Framework_TestCase {

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
}