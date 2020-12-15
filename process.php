<?php

// process form submission
switch (@$_POST["form_submission"]) {
    case "update": // update game links
        if (isset($_POST["game1"])) {
            // grab json
            $data = json_decode(file_get_contents('game1.json'), true);
            
            // update value
            $data['author_url'] = $_POST["game1"];

            // update json
            file_put_contents('game1.json', json_encode($data));
        }
        if (isset($_POST["game2"])) {
            // grab json
            $data = json_decode(file_get_contents('game2.json'), true);
            
            // update value
            $data['author_url'] = $_POST["game2"];

            // update json
            file_put_contents('game2.json', json_encode($data));
        }
        
        header("Location: https://rblxcondo.tk/admin");
        break;
    case "getGame": // get game link
        $gameLink = getGameLink($_POST["game_id"]); // either one or two
        preg_match_all("/games\/([^\/]*)/", $gameLink, $gameIds);

        if (!isGameBanned($gameIds[1][0]))
            echo $gameLink;
        else
            echo "n/a";
        break;
    default:
        break;
}

function isGameBanned($placeId) {
    // get place info
    $placeInfo = json_decode(file_get_contents("http://api.roblox.com/Marketplace/ProductInfo?assetId=".$placeId));
    
    // check if owner of the place is banned
    $ownerId = $placeInfo->Creator->Id;
    $ownerInfo = json_decode(file_get_contents("https://users.roblox.com/v1/users/".$ownerId));

    return $ownerInfo->isBanned;
}


// get game link from id
function getGameLink($id) {
    switch ($id) {
        case '1':
            $jsonString = file_get_contents('game1.json');
            $data = json_decode($jsonString, true);
            return $data["author_url"];
            break;
        case '2':
            $jsonString = file_get_contents('game2.json');
            $data = json_decode($jsonString, true);
            return $data["author_url"];
            break;
    }
}