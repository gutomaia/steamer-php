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

}