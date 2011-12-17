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

    public function testCrassMenagerieIconClosed (){
        $achievement = $this->achievements[1];
        $this->assertEquals("http://media.steampowered.com/steamcommunity/public/images/apps/550/b1b772b233b812fd410aee1f175f8b1cb4fe4e43.jpg", $achievement['iconClosed']);
    }

    public function testCrassMenagerieIconOpen (){
        $achievement = $this->achievements[1];
        $this->assertEquals("http://media.steampowered.com/steamcommunity/public/images/apps/550/1921292f1593086aa0dc7d29124e4c0c1119e084.jpg", $achievement['iconOpen']);
    }

    public function testCrassMenagerieName (){
        $achievement = $this->achievements[1];
        $this->assertEquals("CRASS MENAGERIE", $achievement['name']);
    }

    public function testCrassMenagerieApiname (){
        $achievement = $this->achievements[1];
        $this->assertEquals("ach_kill_every_uncommon_infected", $achievement['apiname']);
    }

    public function testCrassMenagerieDescription (){
        $achievement = $this->achievements[1];
        $this->assertEquals("Kill one of each Uncommon Infected.", $achievement['description']);
    }

    public function testCrassMenagerieTimestamp (){
        $achievement = $this->achievements[1];
        $this->assertNotNull($achievement['timestamp']);
        $this->assertEquals(1292451219000, $achievement['timestamp']);
    }

    public function testARideDeniedIconClosed (){
        $achievement = $this->achievements[2];
        $this->assertEquals("http://media.steampowered.com/steamcommunity/public/images/apps/550/b65a6518c0680448e996e2190d1ed6b00ad14935.jpg", $achievement['iconClosed']);
    }

    //TODO: fix this;
    /*
    public function testARideDeniedIconOpen (){
        $achievement = $this->achievements[2];
        $this->assertEquals("http://media.steampowered.com/steamcommunity/public/images/apps/550/b65a6518c0680448e996e2190d1ed6b00ad14935.jpg", $achievement['iconOpen']);
    }
    */

    public function testARideDeniedName (){
        $achievement = $this->achievements[2];
        $this->assertEquals("A RIDE DENIED", $achievement['name']);
    }

    public function testARideDeniedApiname (){
        $achievement = $this->achievements[2];
        $this->assertEquals("ach_save_player_from_jockey_fast", $achievement['apiname']);
    }

    public function testARideDeniedDescription (){
        $achievement = $this->achievements[2];
        $this->assertEquals("Kill a Jockey within 2 seconds of it jumping on a Survivor.", $achievement['description']);
    }

    public function testArmoryOfOneIconClosed (){
        $achievement = $this->achievements[3];
        $this->assertEquals("http://media.steampowered.com/steamcommunity/public/images/apps/550/4eb2b093ce1dd442da4a62c9a0659602fbfc0d1e.jpg", $achievement['iconClosed']);
    }

    public function testArmoryOfOneIconOpen (){
        $achievement = $this->achievements[3];
        $this->assertEquals("http://media.steampowered.com/steamcommunity/public/images/apps/550/4fc103dcb52ccc748b5bdea66924d1bf5c9e0705.jpg", $achievement['iconOpen']);
    }

    public function testArmoryOfOneName (){
        $achievement = $this->achievements[3];
        $this->assertEquals("ARMORY OF ONE", $achievement['name']);
    }

    public function testArmoryOfOneApiname (){
        $achievement = $this->achievements[3];
        $this->assertEquals("ach_deploy_ammo_upgrade", $achievement['apiname']);
    }

    public function testArmoryOfOneDescription (){
        $achievement = $this->achievements[3];
        $this->assertEquals("Deploy an ammo upgrade and have your team use it.", $achievement['description']);
    }
}