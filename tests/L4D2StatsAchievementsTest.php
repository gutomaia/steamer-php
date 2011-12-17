<?php

class L4D2StatsAchievementTest extends PHPUnit_Framework_TestCase {

    function  setUp (){
        $statsClient = new steamer\Stats();
        $this->achievements = $statsClient->getAchievements("gutomaia", "l4d2");
    }

    public function testNumberOfAchievements(){
        $statsClient = new steamer\Stats();
        $this->achievements = $statsClient->getAchievements("gutomaia", "l4d2");
        $this->assertNotNull($this->achievements);
        $this->assertEquals(67, sizeof($this->achievements));
    }

    public function testAcidReflexAchievementIconClosed (){
        $achievement = $this->achievements[0];
        $this->assertEquals("http://media.steampowered.com/steamcommunity/public/images/apps/550/8d94a8ffcb20fd11de547a6972bcef319fd93bf6.jpg", $achievement['iconClosed']);
    }

    public function testAcidReflexAchievementIconOpen (){
        $achievement = $this->achievements[0];
        $this->assertEquals("http://media.steampowered.com/steamcommunity/public/images/apps/550/19c4af0f9bb24b719a086cbd3b63961d8348bf2b.jpg", $achievement['iconOpen']);
    }

    public function testAcidReflexAchievementName (){
        $achievement = $this->achievements[0];
        $this->assertEquals("ACID REFLEX", $achievement['name']);
    }

    public function testAcidReflexAchievementApiname (){
        $achievement = $this->achievements[0];
        $this->assertEquals("ach_kill_spitter_fast", $achievement['apiname']);
    }

    public function testAcidReflexTimestamp (){
        $achievement = $this->achievements[0];
        $this->assertNotNull($achievement['timestamp']);
        $this->assertEquals(1292701736000, $achievement['timestamp']);
    }

    public function testCrassMenagerieIconOpen (){
        $achievement = $this->achievements[1];
    }


    public function testCrassMenagerieIconClosed (){
        $achievement = $this->achievements[1];
        $this->assertEquals("http://media.steampowered.com/steamcommunity/public/images/apps/550/b1b772b233b812fd410aee1f175f8b1cb4fe4e43.jpg", $achievement['iconClosed']);
    }
}