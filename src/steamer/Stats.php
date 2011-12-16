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
        }
        return $stats;
    }

}