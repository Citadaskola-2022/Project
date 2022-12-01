<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

use Doctrine\Inflector\InflectorFactory;
use Ramsey\Uuid\Uuid;

$transaction = new \App\ServiceCosts(111);
//$transaction->process();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

//echo '<pre>';
var_dump($_ENV['DB_USER']);
var_dump($_ENV['DB_PASSWORD']);

$inflector = InflectorFactory::create()->build();

$name = 'comment';
printf(
    'vienskaitlis: %s, daudzskaitlis: %s',
    $name, $inflector->pluralize($name)
);
echo '<br>';

$blogPost = 'This Is MY 4w350m3 Blog post';
printf(
    'title: %s, url: %s',
    $blogPost, $inflector->urlize($blogPost)
);
echo '<br>';


$uuid = Uuid::uuid4();
printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);
echo '<br>';

