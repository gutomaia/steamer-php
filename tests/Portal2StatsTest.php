<?php

class Portal2StatsTest extends PHPUnit_Framework_TestCase {

    function setUp(){
        $statsClient = new steamer\Stats();
        $this->stats = $statsClient->getStats("gutomaia", "portal2");
    }

    function tearDown(){
        $this->stats = null;
    }

    public function testPortal2getVisibilityState() {
        $this->assertEquals(3, $this->stats["visibilityState"]);
    }

    public function testPortal2getSteamID64(){
        $this->assertEquals(76561197985077150, $this->stats['steamID64']);
    }

    public function testPortal2getPlayerCustomURL(){
        $this->assertEquals("gutomaia", $this->stats['playerCustomURL']);
    }
}
