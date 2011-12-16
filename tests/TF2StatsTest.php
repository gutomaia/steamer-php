<?php

class TF2StatsTest extends PHPUnit_Framework_TestCase {

    function setUp(){
        $statsClient = new steamer\Stats();
        $this->stats = $statsClient->getStats("gutomaia", "tf2");
    }

    function tearDown(){
        $this->stats = null;
    }

    public function testTF2getVisibilityState() {
        $this->assertEquals(3, $this->stats["visibilityState"]);
    }

    public function testTF2getGameFriendlyName(){
        $this->assertEquals('TF2', $this->stats["gameFriendlyName"]);
    }

    public function testTF2getGameName(){
        $this->assertEquals('Team Fortress 2', $this->stats["gameName"]);
    }

    public function testTF2getGameLink(){
        $this->assertEquals('http://store.steampowered.com/app/440', $this->stats['gameLink']);
    }

    public function testTF2getGameIcon(){
        $this->assertEquals('http://media.steampowered.com/steamcommunity/public/images/apps/440/e3f595a92552da3d664ad00277fad2107345f743.jpg', $this->stats['gameIcon']);
    }

    public function testTF2getGameLogo(){
        $this->assertEquals('http://media.steampowered.com/steamcommunity/public/images/apps/440/07385eb55b5ba974aebbe74d3c99626bda7920b8.jpg', $this->stats['gameLogo']);
    }

    public function testTF2getGameLogoSmall(){
        $this->assertEquals('http://media.steampowered.com/steamcommunity/public/images/apps/440/07385eb55b5ba974aebbe74d3c99626bda7920b8_thumb.jpg', $this->stats['gameLogoSmall']);
    }

    public function testTF2getSteamID64(){
        $this->assertEquals(76561197985077150, $this->stats['steamID64']);
    }

    public function testTF2getPlayerCustomURL(){
        $this->assertEquals("gutomaia", $this->stats['playerCustomURL']);
    }
}