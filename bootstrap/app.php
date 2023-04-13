<?php

declare(strict_types=1);

define('ROOT', dirname(__DIR__, 1));

require ROOT. '/vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();
