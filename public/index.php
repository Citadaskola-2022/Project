<?php

declare(strict_types=1);

spl_autoload_register(function ($class){
    require_once __DIR__ . '/../' . lcfirst(str_replace('\\' , '/' , $class)) .'.php';
});

use app\Invoices\Subscription\Bill as SubBill;

$subBill = new SubBill();

var_dump($subBill);