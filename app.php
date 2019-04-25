<?php

require __DIR__.'/vendor/autoload.php';

use Pimple\Container;
use \DiDemo\FriendHarvester;

/* START BUILDING CONTAINER */

$container = new Container();

require __DIR__.'/app/config.php';
require __DIR__.'/app/services.php';

/* END BUILDING CONTAINER */

/* @var FriendHarvester $friendHarvester */
$friendHarvester = $container['friend_harvester'];
$friendHarvester->emailFriends();
