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

    public function testL4D2getGameName(){
        $this->assertEquals("Left 4 Dead 2", $this->stats["gameName"]);
    }

    public function testL4D2getGameLink(){
        $this->assertEquals('http://store.steampowered.com/app/550', $this->stats['gameLink']);
    }

    public function testL4D2getGameIcon(){
        $this->assertEquals('http://media.steampowered.com/steamcommunity/public/images/apps/550/7d5a243f9500d2f8467312822f8af2a2928777ed.jpg', $this->stats['gameIcon']);
    }

    public function testL4D2getGameLogo(){
        $this->assertEquals('http://media.steampowered.com/steamcommunity/public/images/apps/550/205863cc21e751a576d6fff851984b3170684142.jpg', $this->stats['gameLogo']);
    }

    public function testL4D2getGameLogoSmall(){
        $this->assertEquals('http://media.steampowered.com/steamcommunity/public/images/apps/550/205863cc21e751a576d6fff851984b3170684142_thumb.jpg', $this->stats['gameLogoSmall']);
    }

    public function testL4D2getPlayerSteamID64(){
        $this->assertEquals(76561197985077150, $this->stats['steamID64']);
    }

    public function testL4D2getPlayerCustomUrl(){
        $this->assertEquals('gutomaia', $this->stats['playerCustomURL']);
    }
}