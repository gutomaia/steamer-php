<?php

namespace steamer;

class Stats {

    public function getStats($username, $game){
        $stats = array(
            "visibilityState"=>3,
            "gameFriendlyName"=>"L4D2",
            "gameName"=>"Left 4 Dead 2",
            "gameLink"=>"http://store.steampowered.com/app/550",
            "gameIcon"=>"http://media.steampowered.com/steamcommunity/public/images/apps/550/7d5a243f9500d2f8467312822f8af2a2928777ed.jpg",
            "gameLogo"=>"http://media.steampowered.com/steamcommunity/public/images/apps/550/205863cc21e751a576d6fff851984b3170684142.jpg",
            "gameLogoSmall"=>"http://media.steampowered.com/steamcommunity/public/images/apps/550/205863cc21e751a576d6fff851984b3170684142_thumb.jpg",
            "steamID64"=>76561197985077150,
            "playerCustomURL"=>"gutomaia"
        );
        if ($game == 'tf2'){
            $stats['gameFriendlyName'] = 'TF2';
            $stats['gameName'] = 'Team Fortress 2';
            $stats['gameLink'] = 'http://store.steampowered.com/app/440';
            $stats['gameIcon'] = 'http://media.steampowered.com/steamcommunity/public/images/apps/440/e3f595a92552da3d664ad00277fad2107345f743.jpg';
            $stats['gameLogo'] = 'http://media.steampowered.com/steamcommunity/public/images/apps/440/07385eb55b5ba974aebbe74d3c99626bda7920b8.jpg';
            $stats['gameLogoSmall'] = 'http://media.steampowered.com/steamcommunity/public/images/apps/440/07385eb55b5ba974aebbe74d3c99626bda7920b8_thumb.jpg';
        } else if ($game == 'portal2'){
            $stats['gameFriendlyName'] = 'Portal2';
            $stats['gameName'] = 'Portal 2';
            $stats['gameLink'] = 'http://store.steampowered.com/app/620';
            $stats['gameIcon'] = 'http://media.steampowered.com/steamcommunity/public/images/apps/620/2e478fc6874d06ae5baf0d147f6f21203291aa02.jpg';
            $stats['gameLogo'] = 'http://media.steampowered.com/steamcommunity/public/images/apps/620/d2a1119ddc202fab81d9b87048f495cbd6377502.jpg';
            $stats['gameLogoSmall'] = 'http://media.steampowered.com/steamcommunity/public/images/apps/620/d2a1119ddc202fab81d9b87048f495cbd6377502_thumb.jpg';
        }
        return $stats;
    }

    public function getAchievements(){
        $achievements = array();

        for ($i=0;$i<67;$i++){
            $achievements[] = "";
        }

        $achievements[0] = array(
            'iconClosed' => 'http://media.steampowered.com/steamcommunity/public/images/apps/550/8d94a8ffcb20fd11de547a6972bcef319fd93bf6.jpg',
            'iconOpen' => 'http://media.steampowered.com/steamcommunity/public/images/apps/550/19c4af0f9bb24b719a086cbd3b63961d8348bf2b.jpg',
            'name' => 'ACID REFLEX',
            'apiname' => 'ach_kill_spitter_fast',
            'timestamp' => 1292701736000
        );

        $achievements[1] = array(
            'iconClosed' => 'http://media.steampowered.com/steamcommunity/public/images/apps/550/b1b772b233b812fd410aee1f175f8b1cb4fe4e43.jpg'
        );
        return $achievements;
    }

}