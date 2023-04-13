<?php

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
