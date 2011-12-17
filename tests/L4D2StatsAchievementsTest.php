<?php

class L4D2StatsAchievementTest extends PHPUnit_Framework_TestCase {

    public function  testAchievements (){
        $statsClient = new steamer\Stats();
        $this->achievements = $statsClient->getAchievements("gutomaia", "l4d2");
    }

}