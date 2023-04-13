<?php

use JetBrains\PhpStorm\NoReturn;

function view(string $path, ?array $attributes = []): void
{
    extract($attributes);

    require ROOT . '/views' . $path;
}

function abort(int $code = 404): void
{
    http_response_code($code);
    echo "Sorry, page not found.";
    die();
}

#[NoReturn] function dd(mixed $var): void
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}
