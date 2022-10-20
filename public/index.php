<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    require_once __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
});

$iphone = new \App\Phone(11, 'Apple', 144, 71.4);
$android = new \App\Phone(22, 'Samsung');

//echo $iphone->getSize();

$iphone->installApp('Facebook');
$iphone->installApp('Instagram');
$iphone->installApp('Duolingo');

echo implode(', ', $iphone->getInstalledApps());

if ($iphone->isApplicationInstalled('Settings ')) {
    $iphone->turnOnSettings('DoNotDistrub');
    $iphone->turnOnSettings('Mute');
    $iphone->turnOnSettings('Light');

    $iphone->turnOffSettings('Mute');
}


//require __DIR__ . '/../bootstrap/app.php';
