<?php


function weighted($weights): string
{
    $sumWeights = (int) array_sum($weights);
    $rand = random_int(0, $sumWeights * 100) / 100;

    $tempSum = 0;
    foreach ($weights as $value => $weight) {
        $tempSum += $weight;
        if ($rand <= $tempSum) {
            $pickedValue = $value;
            break;
        }
    }

    return $pickedValue;
}

$weights1 = [
    'Ļoti bieži' => 0.2,
    'Bieži' => 0.2,
    'Reizēm' => 0.5,
    'Reti' => 0.5,
    'Nekad' => 0.5,
];

$weights2 = [
    'Jā, ir pieejams ļoti labi' => 0.1,
    'Jā, ir pieejams' => 0.2,
    'Daļēji ir pieejams' => 0.4,
    'Nav pieejams' => 0.5,
];

$weights3 = [
    'Jā' => 0.7,
    'Nē' => 0.3,
];

$weights4 = [
    'Jā, noteikti' => 0.6,
    'Jā, varbūt' => 0.3,
    'Nē, nezinu' => 0.1,
    'Nē, noteikti ne' => 0.1,
];


for($i = 0; $i < 62+12; $i++) {
    printf(weighted($weights3).PHP_EOL);
}