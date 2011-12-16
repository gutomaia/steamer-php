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

    public function testPortal2getGameFriendlyName(){
        $this->assertEquals('Portal2', $this->stats['gameFriendlyName']);
    }

    public function testPortal2getGameName(){
        $this->assertEquals('Portal 2', $this->stats['gameName']);
    }

    public function testPortal2getGameLink(){
        $this->assertEquals('http://store.steampowered.com/app/620', $this->stats['gameLink']);
    }

    public function testPortal2getGameIcon(){
        $this->assertEquals('http://media.steampowered.com/steamcommunity/public/images/apps/620/2e478fc6874d06ae5baf0d147f6f21203291aa02.jpg', $this->stats['gameIcon']);
    }

    public function testPortal2getGameLogo(){
        $this->assertEquals('http://media.steampowered.com/steamcommunity/public/images/apps/620/d2a1119ddc202fab81d9b87048f495cbd6377502.jpg', $this->stats['gameLogo']);
    }

    public function testPortal2getGameLogoSmall(){
        $this->assertEquals('http://media.steampowered.com/steamcommunity/public/images/apps/620/d2a1119ddc202fab81d9b87048f495cbd6377502_thumb.jpg', $this->stats['gameLogoSmall']);
    }

    public function testPortal2getSteamID64(){
        $this->assertEquals(76561197985077150, $this->stats['steamID64']);
    }

    public function testPortal2getPlayerCustomURL(){
        $this->assertEquals("gutomaia", $this->stats['playerCustomURL']);
    }
}
