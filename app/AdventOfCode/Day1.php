<?php

namespace App\AdventOfCode;

class Day1
{
    public const URL = 'https://adventofcode.com/2022/day/1curl /input';

    public function __construct()
    {
        $opts = [
            'http'=> [
                'method' => 'GET',
                'header' => "cookie: session=53616c7465645f5fe9f9c268ef1a6b1c4985a6174dbf7741a5faacf204ad7ada619e0a2aaad5c0e161fb84eb2e2c57fbd4fc370efde1045cc16cb6f8725fb053"
            ]
        ];

        var_dump($opts);
        $context = stream_context_create($opts);

        $data = file_get_contents(self::URL, false, $context);
        var_dump($data);
    }

}