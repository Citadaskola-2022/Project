<?php

declare(strict_types=1);


spl_autoload_register(function ($class){
    echo 'using class: ' . $class . '<br/>';
    $class = __DIR__ . '/../' . lcfirst(str_replace('\\','/',$class)) . '.php';
});

use \src\Invoices\Sub\Bill;

spl_autoload_register(function ($class) {
    require_once __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
});

use \Roberts\Invoices\Subscription\Bill;


$subBill = new Bill();

var_dump($subBill);




//require __DIR__ . '/../bootstrap/app.php';
=======
//require __DIR__ . '/../bootstrap/roberts.php';

