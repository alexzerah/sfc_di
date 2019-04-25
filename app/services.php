<?php

use DiDemo\Mailer\SmtpMailer;
use DiDemo\FriendHarvester;
use \Pimple\Container;

$container['mailer'] = function(Container $container) {
    return new SmtpMailer(
        $container['smtp.server'],
        $container['smtp.user'],
        $container['smtp.password'],
        $container['smtp.port']
    );
};

$container['friend_harvester'] = function (Container $container) {
    return new FriendHarvester($container['pdo'], $container['mailer']);
};

$container['pdo'] = function (Container $container) {
    return new PDO($container['database.dsn']);
};
