<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';

// Datubāzes
// Router

// Unit test

// Manual

// izmanto datubazi ar vairākām tabulām - user / subs /
// ārējās bibleotekas - guzzlehttp/guzzle (API izsakumi), Carbon - Datums un Laiks
// datu strukturas - objekti, masīvi
// paroles tiek galbātas drošā veidā password_hash + password_verify

$passwordStoredInDb = 'test';
$passwordStoredInDb = password_hash($passwordStoredInDb, PASSWORD_BCRYPT);

echo $passwordStoredInDb;
echo '<br>';

$enteredPassword = $_GET['password'];

var_dump(password_verify($enteredPassword, $passwordStoredInDb));

